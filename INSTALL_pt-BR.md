# Tutorial de instalação e configuração do SimpleSAMLphp

Siglas e abreviações:

**SSP**: ao longo do tutorial o SimpleSAMLphp será referenciado como é conhecido em fóruns e outros: apenas **SSP.**

**IdP**: Identity Provider ou Provedor de Identidade

**SP**: Service Provider ou Provedor de Serviço

## Baixar a versão atual do site do desenvolvedor:

https://simplesamlphp.org/download

*Obs.: o tutorial atual foi baseado na última versão quando da construção do mesmo, a 1.13.2.*


Descompactar o arquivo baixado:

`tar -zxvf simplesamlphp-1.13.2.tar.gz`

*Para facilitar, renomear a pasta descompactada para apenas simplesaml.*

## Configurar o SSP no servidor web

Na minha experiência, a melhor coisa a fazer nesse momento é servir o SSP através de algum servidor web, pois assim você terá condições de utilizar algumas ferramentas dele mesmo para auxiliar na configuração.

Supondo o uso do Apache, a configuração é tão simples quanto  adicionar as seguintes diretivas na seção VirtualHost da sua configuração do apache:


    Alias /simplesaml /var/www/simplesamlphp/www
    ErrorLog /var/log/apache2/ssperror_log
    CustomLog /var/log/apache2/sspaccess_log combined

    DocumentRoot /var/www/simplesamlphp/
    <Directory /var/www/simplesamlphp>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride None
        Order allow,deny
        allow from all
    </Directory>

Estando tudo certo, você deverá ser capaz de conseguir acessar a página inicial do SSP através do navegador, através do link http://<endereco_servico>/simplesaml/

## Configurar o SSP como SP

Documentação disponível em: https://simplesamlphp.org/docs/stable/simplesamlphp-sp#section_1

### Editar o arquivo config/authsources.php

Localizar a seção 

    'default-sp' => array(
        'saml:SP',
    ),


e se desejar, alterar o nome 'default-sp' para outro mais significativo, por exemplo:

    'sp-tutorial-shirlei' => array(
        'saml:SP',
    ),


Esse é o nome que vai ficar visível por exemplo na página de autenticações disponíveis, na tela de autenticadores disponíveis para teste na página inicial do simplesaml.
Para o tutorial em questão, manterei o nome 'default-sp'.

### Habilitar/criar um certificado para o seu provedor de serviço

#### a) Criar um diretório para o certificado:

`mkdir cert`

#### b) Gerar o certificado

`cd cert`

`openssl req -newkey rsa:2048 -new -x509 -days 3652 -nodes -out saml.crt -keyout saml.pem`

*Obs.: serão requisitadas algumas informações, como país, estado e outras, que devem ser preenchidas de acordo com o caso.*

#### c) Editar o arquivo config/authsources.php

Localizar a seção 

    'default-sp' => array(
        'saml:SP',
    ),

ou qual seja o nome que foi definido ao invés de 'default-sp' e adicionar as informações do certificado:


    'default-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
    ),


### Adicionar IdPs ao SP

O provedor de serviço precisa conhecer os provedores de identidade disponíveis. Essa informação é configurada no arquivo 
metadata/saml20-idp-remote.php

O SSP tem um padrão de construção desse arquivo, mas para facilitar fornece uma ferramenta de conversão de um xml com o metadata da federaçao.

Utilizando como exemplo o metadata da cafeexpresso [1], disponível em https://ds.cafeexpresso.rnp.br/metadata/ds-metadata.xml,
seria possível copiar o conteúdo desse arquivo e colar na ferramenta de conversão do SSP, disponível em 
http://<endereco_servico>/simplesaml/admin/metadata-converter.php (acesso através da página inicial do ssp, na aba "Federação", na opção Conversor de XML para metadata do simpleSAMLphp).

Uma forma simples de obter o conteúdo é mandar exibir o código fonte da página exibindo o arquivo xml (https://ds.cafeexpresso.rnp.br/metadata/ds-metadata.xml, no caso), e copiar todo o conteúdo. Assim evita copiar caracteres incorretos da visualização do xml que o navegador exibe com formatação.

Após fazer a conversão, a ferramenta apresenta vários resultados, usar o que for para saml20-idp-remote.

Neste momento, ao clicar na aba Autenticação -> Test configured authentication sources -> default-sp (ou o nome fornecido), deve aparecer a lista de IdPs disponíveis.

Se você tentar conectar em algum deles, deve receber uma mensagem de erro, pois a relação de confiança ainda não foi estabelecida.

## Estabelecer a relação de confiança com os IdPs, aka Enviar metadados do seu SP para a federação

Agora, para que seja possível conectar com algum dos IdPs, é necessário estabelecer a relação de confiança.
Para tal, é necessário obter o arquivo XML com o metadado do SP e enviar para o administrador da federação que você deseja estabelecer relação de confiança.
É possível obter esse xml através do próprio SSP, acessando 

http://<host>/simplesaml/module.php/saml/sp/metadata.php/default-sp?output=xhtml (trocar default-sp para o nome que você estiver usando).

Para que suas informações de contato apareçam nesse xml, é necessário ter incluído a seguinte seção no config/authsources.php (https://simplesamlphp.org/docs/1.13/saml:sp):

'contacts' => array(
        array(
            'contactType'       => 'support',
            'emailAddress'      => 'shirlei@gmail.com',
            'givenName'         => 'Shirlei',
            'surName'           => 'Chaves',
        )
    ),

Após receber a confirmação de que o metadados do seu SP foi incluído (a relação de confiança foi estabelecida), você deverá conseguir fazer a conexão em algum dos IdPs disponíveis que você tenha usuário e senha.
Neste ponto, o SSP está configurado e operacional como um SP.


## Configurar o SSP como IdP

Documentação disponível em https://simplesamlphp.org/docs/stable/simplesamlphp-idp

### Editar o arquivo config/config.php

Habilitar a funcionalidade de provedor de identidade. No nosso caso, vamos habilitar a opção para a versão 2 do SAML.

Localizar a entrada:

    'enable.saml20-idp' => false,

e mudar de false para true:

    'enable.saml20-idp' => true,
    
### Gerar chave privada e certificado

É possível utilizar o comando exemplo fornecido no site da documentação do ssp (conforme em https://simplesamlphp.org/docs/stable/simplesamlphp-idp#section_4), para gerar uma chave privada e o correspondente certificado auto assinado:

    openssl req -newkey rsa:2048 -new -x509 -days 3652 -nodes -out example.org.crt -keyout example.org.pem

Editar o arquivo metadata/saml20-idp-hosted.php e fornecer os valores para private key e certificate conforme o exemplo a seguir:

    'privatekey' => 'example.org.pem',
    'certificate' => 'example.org.crt',

Lembre-se de colocar os arquivos dentro do diretório definido em config/config.php, na variável *certdir*.

### Configurar o modo como os usuários vão se conectar ao IdP

O SSP permite o uso de diversos módulos de autenticação, incluindo por exemplo desde uma lista fixa de usuário e senha, facebook ID e autenticação Ldap, até um modo *bridging*, usando um SAML IdP. Essa última opção cobriremos mais tarde.

Nessa primeira parte do tutorial de configuração do IdP, vamos utilizar como exemplo o módulo *authcrypt:Htpasswd*, o qual autentica usuário e senha contra um arquivo .htpasswd (maiores informações em https://httpd.apache.org/docs/2.2/programs/htpasswd.html).

#### Habilitar o módulo

O módulo *authcrypt:Htpasswd* não vem habilitado por padrão e precisa ser habilitado. Para tal, basta criar um arquivo chamado "enable" dentro do diretório do módulo:

`touch modules/authcrypt/enable`

#### Editar config/authsources.php

Além de habilitar o módulo, é necessário configurar a fonte de autenticação. Edite o arquivo *config/authsources.php*

Localize a seção 

    /*
    'htpasswd' => array(
        'authcrypt:Htpasswd',
        'htpasswd_file' => '/var/www/simplesamlphp/.htpasswd',
        'static_attributes' => array(
            'eduPersonAffiliation' => array('member', 'employee'),
            'Organization' => array('University of Foo'),
        ),
    ),
    */
    
remova a marcação de texto *commented out* (remover as linhas com /* e */) e preencha os dados necessários de acordo com a sua configuração (endereço do htpasswd_file, por exemplo).

#### Criar o arquivo .htpasswd

Se você não tiver o programa htpasswd instalado no seu servidor, instale-o com o seguinte comando:

`# apt-get install apache2-utils`

Após instalá-lo, crie o arquivo e adicione um usuário, com o seguinte comando (você será solicitado a informar uma senha para esse usuário):

`htpasswd -c .htpasswd johndoe`



Após finalizar as configurações acima, o SSP estará configurado como IdP. Para testar, acesse a página da instalação do SSP (http://<host>/simplesaml/module.php/core/frontpage_welcome.php) e clique na aba Autenticação, depois em *Test configured authentication sources*. Deve haver a opção *htpasswd*, na qual, ao clicar, você será solicitado a informar usuário e senha. Informe o usuário e senha cadastrado com o comando htpasswd. Se tudo estiver correto, você será direcionado para a página pós autenticação, na qual serão exibidos seus atributos.



[1] https://wiki.rnp.br/pages/viewpage.action?pageId=69961107

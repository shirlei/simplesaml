<?php
$metadata['https://idp1.cafeexpresso.rnp.br/idp/shibboleth'] = array (
  'entityid' =>'https://idp1.cafeexpresso.rnp.br/idp/shibboleth',
  'description' =>
  array (
    'en' =>'GId Lab - CAFe Expresso',
  ),
  'OrganizationName' =>
  array (
    'en' =>'GId Lab - CAFe Expresso',
  ),
  'name' =>
  array (
    'en' =>'IdP1 - Universidade de Trantor',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' =>'IdP1 - Universidade de Trantor',
  ),
  'url' =>
  array (
    'en' =>'http://wiki.rnp.br/display/gidlab',
  ),
  'OrganizationURL' =>
  array (
    'en' =>'http://wiki.rnp.br/display/gidlab',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' =>'technical',
      'surName' =>'Suporte GId Lab',
      'emailAddress' =>
      array (
        0 =>'experimentosgidlab@rt.rnp.br',
      ),
    ),
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://idp1.cafeexpresso.rnp.br/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idp1.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://idp1.cafeexpresso.rnp.br/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp1.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://idp1.cafeexpresso.rnp.br:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idp1.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>true,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIFijCCA3ICAQAwDQYJKoZIhvcNAQELBQAwgYoxDzANBgNVBAoTBkdJZExhYjEW
MBQGA1UECxMNQ0FGZSBFeHByZXNzbzEWMBQGA1UEBxMNRmxvcmlhbm9wb2xpczEX
MBUGA1UECBMOU2FudGEgQ2F0YXJpbmExCzAJBgNVBAYTAkJSMSEwHwYDVQQDExhp
ZHAxLmNhZmVleHByZXNzby5ybnAuYnIwHhcNMTQxMDE3MTM1NjEzWhcNMTkxMDE2
MTM1NjEzWjCBijEPMA0GA1UEChMGR0lkTGFiMRYwFAYDVQQLEw1DQUZlIEV4cHJl
c3NvMRYwFAYDVQQHEw1GbG9yaWFub3BvbGlzMRcwFQYDVQQIEw5TYW50YSBDYXRh
cmluYTELMAkGA1UEBhMCQlIxITAfBgNVBAMTGGlkcDEuY2FmZWV4cHJlc3NvLnJu
cC5icjCCAiIwDQYJKoZIhvcNAQEBBQADggIPADCCAgoCggIBALPLG3rnewPuZkWZ
/jxzGvNRLYRUdeVXtMul1s+jJCWVtdna2SKLNLLlfwTpG/H6FLja4YsJ7JsMxn6d
NzLEpbh0l2yVNoF2BFWpqld1MGmAPvkqztENai9NpprxYIMdqHKN5rQrjEpKsv9L
+nEsg121c49H9O97JY3UmjM272NF2qpohM1dgppKuzRhA47eE4XzIgUdPEEsWNjw
hpBVwh4up7fFHO/qOzu+NSUd4m8gCdx0RM6ilTLs9Mjmj01fWO9STdIIqlUn8kU9
VJIHpnNFW0W0gyuTT/VmEBqUI6Il4iErVslsktG4GYOBJJ5NhHWtNqtDa9+jQBws
YyuMjpqqCKBu5u8KrXbpmAp0/zb5lth04p9MSFzHtzLzhKtDapBO4VrYdG8Yscx/
pzttuavFa6LJHasKLe3i4NerkWz2NVwcfW3Y9mPFWmSzHR6qcKaaDxPpODr9IxHK
MpsAjbkopgiu//KeG5DwwfpfwSJCuilyrjuD2P64wrSC+6e/wcJsOL9QUsbjHMaj
32QlXrFDgTDnY9xwpHdBh7iVtyMlbFB9wNEDfl7+bC4GLJPX+yzpRDYXm0sZZAgh
ATvreT68eU880O++g3wC/l0RyjcfV1MHMW6Uv87R7mwUZRY9A6Ba4KEggqdb4IFV
w8+EWmg1A0vDhn9VGy4gOiCNv2kLAgMBAAEwDQYJKoZIhvcNAQELBQADggIBAGJ7
QXtpm+re9ujp6uSTd/41Au0L7hkbVyVEGM8b6wnjnYjeCg+DFPI84aQwdJ0cKn2r
6G/o3n15S0gyc5zs5dm18AxUUKgyZVnNarYtERhNZ/Yc2qwRABh2rlys+Dtpfc5r
D/J6SOVuDOhDy1x13W5voYE4gF065Zh09T8r1aGw6cx8tCmRIPdw8LooUcG64ln6
sOKkhWkUpV85UTfEX9BGf3SCigHs2a5Jm/zf69YeL4yye+1GNGMiX2snKCJtCA1i
bixT1YIruyTOvYUfXS0ZvGjGQv1nf+GShcF+m1QUP1SEWEz2QoR4Whzk6VLDuTcP
TkG1XZW3qGlhDUlVNZ+Jo0ovIICf5ZNPoRfpEJou7vLSsh3lHod73f+DXkw4AfPm
7WLLa/JJ7DBFOrGHN3bwIb3rSiDQx0FJLaTdMRgQzX0o00Pvg5JezEvqaNlQOF38
SLZVtIzy+UtDFOa/9/vxR+Zk5Sink3cPBcEA3b9shqTKZTmmp+EbzhwtTEt9JyRK
JYVCCavd5xE9Xg1H/03cQ0IWVTkSVlOx0LKKBFzgtarzTcLw+P9o/mE7gmlBMofq
nQCY7MiQ04mpWI2cEA+Gr/AWUuNCvYIVePBMNxA/GCa4acctGlDAQbYrPXmxhVig
0QxBDGhgwdFnsFJU+qR+sDeI0guZcjaKgovCQ6xD
                    ',
    ),
  ),
  'scope' =>
  array (
    0 =>'rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP1 - Universidade de Trantor',
    ),
    'Description' =>
    array (
      'en' =>'Provedor de Identidades',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
    'Logo' =>
    array (
      0 =>
      array (
        'url' =>'https://idp1.cafeexpresso.rnp.br/idp/images/logo-idp1.png',
        'height' =>78,
        'width' =>148,
      ),
      1 =>
      array (
        'url' =>'https://idp1.cafeexpresso.rnp.br/idp/images/small-idp1.png',
        'height' =>24,
        'width' =>24,
      ),
    ),
  ),
);
$metadata['https://idp2.cafeexpresso.rnp.br/idp/shibboleth'] = array (
  'entityid' =>'https://idp2.cafeexpresso.rnp.br/idp/shibboleth',
  'description' =>
  array (
    'en' =>'GId Lab - CAFe Expresso',
  ),
  'OrganizationName' =>
  array (
    'en' =>'GId Lab - CAFe Expresso',
  ),
  'name' =>
  array (
    'en' =>'IdP2 - Universidade Hari Seldon',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' =>'IdP2 - Universidade Hari Seldon',
  ),
  'url' =>
  array (
    'en' =>'http://wiki.rnp.br/display/gidlab',
  ),
  'OrganizationURL' =>
  array (
    'en' =>'http://wiki.rnp.br/display/gidlab',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' =>'technical',
      'surName' =>'Suporte GId Lab',
      'emailAddress' =>
      array (
        0 =>'experimentosgidlab@rt.rnp.br',
      ),
    ),
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://idp2.cafeexpresso.rnp.br/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idp2.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://idp2.cafeexpresso.rnp.br/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp2.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://idp2.cafeexpresso.rnp.br:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idp2.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>true,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIID9DCCAtwCAQAwDQYJKoZIhvcNAQEFBQAwgb8xEDAOBgNVBAoTB0dJZCBMYWIx
HTAbBgNVBAsTFElkUDIgLSBDQUZlIEV4cHJlc3NvMSswKQYJKoZIhvcNAQkBFhxl
eHBlcmltZW50b3NnaWRsYWJAcnQucm5wLmJyMRYwFAYDVQQHEw1GbG9yaWFub3Bv
bGlzMRcwFQYDVQQIEw5TYW50YSBDYXRhcmluYTELMAkGA1UEBhMCQlIxITAfBgNV
BAMTGGlkcDIuY2FmZWV4cHJlc3NvLnJucC5icjAeFw0xNDA2MDExMjU3NTlaFw0x
OTA1MzExMjU3NTlaMIG/MRAwDgYDVQQKEwdHSWQgTGFiMR0wGwYDVQQLExRJZFAy
IC0gQ0FGZSBFeHByZXNzbzErMCkGCSqGSIb3DQEJARYcZXhwZXJpbWVudG9zZ2lk
bGFiQHJ0LnJucC5icjEWMBQGA1UEBxMNRmxvcmlhbm9wb2xpczEXMBUGA1UECBMO
U2FudGEgQ2F0YXJpbmExCzAJBgNVBAYTAkJSMSEwHwYDVQQDExhpZHAyLmNhZmVl
eHByZXNzby5ybnAuYnIwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDL
unpHxxVecOcSeP5AFE55zbL3V3A9X/4Zt/Eqkfb88dZRyVemoBnssHf7B55X+Svd
XYgaolReBHgTvdh1R9aqRq7wYG0WF9+5nXMUPvElVIEWh38oun1NJ2+0B6txHl1S
+2n7gmoRZ0U9hSX7lQanjgaYb0ePGfX6VDI4oV7XMkv9B+JtRgr3VedHlc8o/Skh
Y7tpk8PdzsBb0hPzTdCtewRxOghEsyCStSqI1FjEWq9gySS1XP7gr7r7Lcd/1970
mj4pVL1tAVGxCnm59EhDw0hYOeVxUEZlckHHTEgfCf8wq4PBwWjBVBwQRKDkxrqf
seTOfzCjxFXUnb+Uzro5AgMBAAEwDQYJKoZIhvcNAQEFBQADggEBADed4dTq3BEX
105JsqCwtQfl1PLVphd6R5zOSan2hRqMxSdhPNhEGZzp5ZvNgjoT8+m1ZNwpiTsd
IYf02QDkEqqzb/vcpaU238CvwsddssTHyWw/QvR4tWw6o9TwjnLbnhXFuUYzqKln
lvTgJ97zUbQOlmwEfcqGITtmvt0g80jPvRqZJsf+fUEMhStMEjjS2X/c0mGmxU2H
/XJ2G+y8EU8iH4Qz+DgqEf+KruWAssRW5X0jubmUTO/Z/KK74jBefJFgrX0r15pm
+xmF4sGNgnzxd2sod5zPcfobgYklLoQtxON/q/NqD6jSiQOckujF+vu/bMucie3t
W8/lnSjerXQ=
                    ',
    ),
  ),
  'scope' =>
  array (
    0 =>'rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP2 - Universidade Hari Seldon',
    ),
    'Description' =>
    array (
      'en' =>'Provedor de Identidades - CAFe Expresso',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
    'Logo' =>
    array (
      0 =>
      array (
        'url' =>'https://idp2.cafeexpresso.rnp.br/idp/images/logo-idp2.png',
        'height' =>78,
        'width' =>148,
      ),
      1 =>
      array (
        'url' =>'https://idp2.cafeexpresso.rnp.br/idp/images/small-idp2.png',
        'height' =>24,
        'width' =>24,
      ),
    ),
  ),
);
$metadata['https://idp3.cafeexpresso.rnp.br/idp/shibboleth'] = array (
  'entityid' =>'https://idp3.cafeexpresso.rnp.br/idp/shibboleth',
  'description' =>
  array (
    'en' =>'GId Lab - CAFe Expresso',
  ),
  'OrganizationName' =>
  array (
    'en' =>'GId Lab - CAFe Expresso',
  ),
  'name' =>
  array (
    'en' =>'IdP3 - Universidade de Terminus',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' =>'IdP3 - Universidade de Terminus',
  ),
  'url' =>
  array (
    'en' =>'https://wiki.rnp.br/display/gidlab',
  ),
  'OrganizationURL' =>
  array (
    'en' =>'https://wiki.rnp.br/display/gidlab',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' =>'technical',
      'surName' =>'Suporte GId Lab',
      'emailAddress' =>
      array (
        0 =>'experimentosgidlab@rt.rnp.br',
      ),
    ),
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://idp3.cafeexpresso.rnp.br/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idp3.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://idp3.cafeexpresso.rnp.br/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp3.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp3.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SLO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idp3.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SLO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idp3.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/SLO',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://idp3.cafeexpresso.rnp.br:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idp3.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>true,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'

MIIF5DCCA8wCAQAwDQYJKoZIhvcNAQEFBQAwgbcxDzANBgNVBAoTBkdJZExhYjEW
MBQGA1UECxMNQ0FGZSBFeHByZXNzbzErMCkGCSqGSIb3DQEJARYcZXhwZXJpbWVu
dG9zZ2lkbGFiQHJ0LnJucC5icjEWMBQGA1UEBxMNRmxvcmlhbm9wb2xpczEXMBUG
A1UECBMOU2FudGEgQ2F0YXJpbmExCzAJBgNVBAYTAkJSMSEwHwYDVQQDExhpZHAz
LmNhZmVleHByZXNzby5ybnAuYnIwHhcNMTQxMjA1MTQwMzI5WhcNMTYxMjA0MTQw
MzI5WjCBtzEPMA0GA1UEChMGR0lkTGFiMRYwFAYDVQQLEw1DQUZlIEV4cHJlc3Nv
MSswKQYJKoZIhvcNAQkBFhxleHBlcmltZW50b3NnaWRsYWJAcnQucm5wLmJyMRYw
FAYDVQQHEw1GbG9yaWFub3BvbGlzMRcwFQYDVQQIEw5TYW50YSBDYXRhcmluYTEL
MAkGA1UEBhMCQlIxITAfBgNVBAMTGGlkcDMuY2FmZWV4cHJlc3NvLnJucC5icjCC
AiIwDQYJKoZIhvcNAQEBBQADggIPADCCAgoCggIBALtGfZhFQI5foCB9LPfADBWb
hlg/A4Vkoflr9vldjlGvOcgaaH87nwd0suXQ5aGmwhNmoYhOgUKNczgbNQweJ/V+
imm8ndRZMeFuNJV59wMq0KJe4ko1IZSId/P1z3W9jfaOVsvjHpJPIa02QkRB/SQ0
ug4qPQpUzaj5DhWADTmLP7fZVFWYmq9e8YIuPxjiLFIKI9UfwdECl/o3sG8x14GZ
GXNlBopYbFvJ8kbPW16vTuXXAMfawBScF6UIZCFgolNB+TVx5dSwZogRCYH6xVQT
VFLsEvNNqazLJkjML/3F0iXyk5UCuOkNA+vc5l7ukv2iPRHhLbEB+bPry2tveHf6
dxoDI67ZQ2Rvn5F9IugMCy+JKY8C7s3suKRtm8xrRg+u4yCS5GjnZdn8aJfYwxaJ
ukz4U/0zQ6PTLy35cSbh+beCBstrhgGbl4TSi7tXTZk4Xoh1RuaHLDYeU4k3dRN9
avIpwfHjGLvkBt51B+P+rcw7CuCr/fKnWszgK8nAbwXtpLw6Kid5UphOJzFAlcfM
vsqLmtpljPign/rynhD8YiSBqLs9+l2JQ31FObyA5g+RQYWI0wzI7vDDeUC6/Elc
tPCRvIyyeME3rkWk/jJkl6XMatvt+R8OsZhWmfuEymjAc/P6EEANMELj/OoyoZkp
lVbmNfLxQYAry4TLZ6AJAgMBAAEwDQYJKoZIhvcNAQEFBQADggIBAD/RxI3r0+rx
YDkkLdid6yY2QfGJ3e9CL4EjdxVG264i/05u0jBJsO73JYEvc/pAbB+yMT0AWbA1
mSNwbrs49lrvC+iMnEJUDLwlG5McJ66r+MnwqTHkVF1685nvZJZa/hoFTCFxEyrU
gIjnQINNRIwIH8yBwjG4D26ytIVtPci0SD3LyFnNCLwJtmp9Q2b6jNd6tbHEndpw
238ySUwhhOvak8BXo1cax5oPr/d7CG64g6qB9g5NOHIYiKUwk2ub/nHZMABUdvh6
B0aZIHlsMg+to1E0ZpeI+ocIFacCPZo8mv15Q2Q6rRM+4Fj94bg19kYy1lczbBq1
pBGwX+7+8oPYcVjRal/yAef0QQang98Y+JaHP+dtYN7Xm9J4LvnWbR97Cz+3uhVm
O3PL7aNq62paHz04/10aN7UXWpdRrWoee/+Ox6i9prhnLtl6MfOFs+19bhOWP2L7
xZ2w8YZ+l5G7nwDASqRbB7jFNDHnqTkK+GdqQ0tRVgND62djgR2eQSUbI/q3kroM
EelaX0iTdW5AlcfNUgmG5RhH9vA9n/ygXnUSgiqgL+9B0s+qnkyCg9Gwys9ZLb5c
pfWWiJUPpRARbfTAMQRo7sWAPNnvx4RuqAT4+XUJ9uo2w/5alq4JhE68G2vmCLwu
2lxtydYWvkD67zyVgLrWiegCtOs//BTA

                    ',
    ),
  ),
  'scope' =>
  array (
    0 =>'rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP3 - Universidade de Terminus',
    ),
    'Description' =>
    array (
      'en' =>'Provedor de Identidades - CAFe Expresso',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
    'Logo' =>
    array (
      0 =>
      array (
        'url' =>'https://idp3.cafeexpresso.rnp.br/idp/images/logo-idp3.png',
        'height' =>78,
        'width' =>148,
      ),
      1 =>
      array (
        'url' =>'https://idp3.cafeexpresso.rnp.br/idp/images/small-idp3.png',
        'height' =>24,
        'width' =>24,
      ),
    ),
  ),
);
$metadata['https://idp-mais.cafeexpresso.rnp.br/idp/shibboleth'] = array (
  'entityid' =>'https://idp-mais.cafeexpresso.rnp.br/idp/shibboleth',
  'description' =>
  array (
    'en' =>'CAFe Expresso - IdP+',
  ),
  'OrganizationName' =>
  array (
    'en' =>'CAFe Expresso - IdP+',
  ),
  'name' =>
  array (
    'en' =>'IdP+ - Universidade Bayta Darell',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' =>'IdP+ - Universidade Bayta Darell',
  ),
  'url' =>
  array (
    'en' =>'http://wiki.rnp.br/display/gidlab',
  ),
  'OrganizationURL' =>
  array (
    'en' =>'http://wiki.rnp.br/display/gidlab',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' =>'technical',
      'surName' =>'Suporte GId Lab',
      'emailAddress' =>
      array (
        0 =>'gidlab@rnp.br',
      ),
    ),
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://idp-mais.cafeexpresso.rnp.br/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idp-mais.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://idp-mais.cafeexpresso.rnp.br/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp-mais.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://idp-mais.cafeexpresso.rnp.br:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idp-mais.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>true,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIID0DCCArgCAQAwDQYJKoZIhvcNAQEFBQAwga0xFjAUBgNVBAoTDUNBRmUgRXhw
cmVzc28xEDAOBgNVBAsTB0dJZCBMYWIxHDAaBgkqhkiG9w0BCQEWDWdpZGxhYkBy
bnAuYnIxFjAUBgNVBAcTDUZsb3JpYW5vcG9saXMxFzAVBgNVBAgTDlNhbnRhIENh
dGFyaW5hMQswCQYDVQQGEwJCUjElMCMGA1UEAxMcaWRwLW1haXMuY2FmZWV4cHJl
c3NvLnJucC5icjAeFw0xMzA3MzAwMDUzNDRaFw0xNjA3MjkwMDUzNDRaMIGtMRYw
FAYDVQQKEw1DQUZlIEV4cHJlc3NvMRAwDgYDVQQLEwdHSWQgTGFiMRwwGgYJKoZI
hvcNAQkBFg1naWRsYWJAcm5wLmJyMRYwFAYDVQQHEw1GbG9yaWFub3BvbGlzMRcw
FQYDVQQIEw5TYW50YSBDYXRhcmluYTELMAkGA1UEBhMCQlIxJTAjBgNVBAMTHGlk
cC1tYWlzLmNhZmVleHByZXNzby5ybnAuYnIwggEiMA0GCSqGSIb3DQEBAQUAA4IB
DwAwggEKAoIBAQCaxZrM4lE7ly+zR5Rjrz7jVvRnW8BNtF8u3CY9arkQNOgUvgGL
s6Zo0hcisK14Z9yq6t7FlJ70xrO+ITk19AFTUktZcNFo2p0F6FHwwL6bANnqo3yU
UF8VqWz/lQDJZluGM4eh7ERrNV4ADanrRmBlSU6LO5fdQtO8xfIybeZP49USJhbp
mnM2kzJnn7nxIGubWmjuCL34SUesB+QtdMMa8vlsqpO1XxUOy2acpE4wIg5GUxYK
VNrYGPoObYqqkU57cGUUgPCos/BAxOfgHWkpNUVejDNLvw+Tzb85Nl2wBwhNc1Rk
zU8aLOsohS+uTIBiWVTTqgfosZ12Tq9wR8WVAgMBAAEwDQYJKoZIhvcNAQEFBQAD
ggEBAJVrbisjHjYW+jkeeVLaXrtPz+Y8Dx8sFKPxeGRQ36SF5L7epmU/8wBs63/H
w9oh6MnskF8kxcUtEQEU0Sl6HBnU+Aeh8rPfDvL0XdbcRGuR9rkSkusKkfx7kLc0
EpY2GkHj9eB1ySUDjurzGREC6NPjWp6JR+2pA7EIKNoi3LxlwiM5S0/2UM7Niqbd
CXZpGaTwOPo3KsX31huX7bWc1gFRLCB3tFYY2gXWmrH3JjAMcQHvDVUewW6Q8y5h
6vcyCOy97QCPDV7Qhk/C8F4wjjofY18VrcRP0Nd68PoeaQh8Sq20XB47Uw3gl8NI
BfJcj9Jak0OpYqwHQihZP2WYdYk=

                    ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP+ - Universidade Bayta Darell',
    ),
    'Description' =>
    array (
      'en' =>'Provedor de Identidades - CAFe Expresso',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
);
$metadata['http://idp1-openam.gidlab.rnp.br:8080/openam'] = array (
  'entityid' =>'http://idp1-openam.gidlab.rnp.br:8080/openam',
  'description' =>
  array (
    'en' =>'GIdLab OpenAM',
  ),
  'OrganizationName' =>
  array (
    'en' =>'GIdLab OpenAM',
  ),
  'name' =>
  array (
    'en' =>'OpenAM IdP1',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' =>'OpenAM IdP1',
  ),
  'url' =>
  array (
    'en' =>'http://idp1-openam.gidlab.rnp.br/',
  ),
  'OrganizationURL' =>
  array (
    'en' =>'http://idp1-openam.gidlab.rnp.br/',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' =>'technical',
      'surName' =>'GIdLab',
      'emailAddress' =>
      array (
        0 =>'experimentosgidlab@rt.rnp.br',
      ),
    ),
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/SSORedirect/metaAlias/idp',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/SSOPOST/metaAlias/idp',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/SSOSoap/metaAlias/idp',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/IDPSloRedirect/metaAlias/idp',
      'ResponseLocation' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/IDPSloRedirect/metaAlias/idp',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/IDPSloPOST/metaAlias/idp',
      'ResponseLocation' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/IDPSloPOST/metaAlias/idp',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/IDPSloSoap/metaAlias/idp',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'http://idp1-openam.gidlab.rnp.br:8080/openam/ArtifactResolver/metaAlias/idp',
      'index' =>0,
      'isDefault' =>true,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIICQDCCAakCBEeNB0swDQYJKoZIhvcNAQEEBQAwZzELMAkGA1UEBhMCVVMxEzARBgNVBAgTCkNh
bGlmb3JuaWExFDASBgNVBAcTC1NhbnRhIENsYXJhMQwwCgYDVQQKEwNTdW4xEDAOBgNVBAsTB09w
ZW5TU08xDTALBgNVBAMTBHRlc3QwHhcNMDgwMTE1MTkxOTM5WhcNMTgwMTEyMTkxOTM5WjBnMQsw
CQYDVQQGEwJVUzETMBEGA1UECBMKQ2FsaWZvcm5pYTEUMBIGA1UEBxMLU2FudGEgQ2xhcmExDDAK
BgNVBAoTA1N1bjEQMA4GA1UECxMHT3BlblNTTzENMAsGA1UEAxMEdGVzdDCBnzANBgkqhkiG9w0B
AQEFAAOBjQAwgYkCgYEArSQc/U75GB2AtKhbGS5piiLkmJzqEsp64rDxbMJ+xDrye0EN/q1U5Of+
RkDsaN/igkAvV1cuXEgTL6RlafFPcUX7QxDhZBhsYF9pbwtMzi4A4su9hnxIhURebGEmxKW9qJNY
Js0Vo5+IgjxuEWnjnnVgHTs1+mq5QYTA7E6ZyL8CAwEAATANBgkqhkiG9w0BAQQFAAOBgQB3Pw/U
QzPKTPTYi9upbFXlrAKMwtFf2OW4yvGWWvlcwcNSZJmTJ8ARvVYOMEVNbsT4OFcfu2/PeYoAdiDA
cGy/F2Zuj8XJJpuQRSE6PtQqBuDEHjjmOQJ0rV/r8mO1ZCtHRhpZ5zYRjhRC9eCbjx9VrFax0JDC
/FfwWigmrW0Y0Q==
                    ',
    ),
  ),
);
$metadata['https://idpv3.cafeexpresso.rnp.br/idp/shibboleth'] = array (
  'entityid' =>'https://idpv3.cafeexpresso.rnp.br/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://idpv3.cafeexpresso.rnp.br/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idpv3.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://idpv3.cafeexpresso.rnp.br/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idpv3.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://idpv3.cafeexpresso.rnp.br:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idpv3.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDUDCCAjigAwIBAgIVAKbKcKXl7lb2hvbjdVywG4rIjf15MA0GCSqGSIb3DQEB
CwUAMCQxIjAgBgNVBAMMGWlkcHYzLmNhZmVleHByZXNzby5ybnAuYnIwHhcNMTUw
NTA5MTg0OTE4WhcNMzUwNTA5MTg0OTE4WjAkMSIwIAYDVQQDDBlpZHB2My5jYWZl
ZXhwcmVzc28ucm5wLmJyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA
u7IDYlGgJLSiVHrgQEcvP+daFIJKeqXZW+EIK4jQBJbyAaWS6DzTVRrW5kFXtJaE
bZOIn6dbTA0a2h6/d2LTQrUz79hVlfh5OzSt1hREGpx6clAbbPlAm3iTMar4M+CX
eNEKapjf1pkl8MOS7yJMLi+K6xRorKZq2Fw5QJS+M+dv7Cf6wPaqUuxJSW9Nt5YR
XbKDghuvYhU6odLMeOh6MGfCpil1eURSHJZJGJeKuz5FNIcLbnIeNPNNNSnKqLGm
nM5MYw7vn+eIXwLYD31ilPGrTC40pTTPIH/Rap1thX22xpe3Ya/OX9/cWM2H+Zta
GhRetpjfuLUEDHCxbJdAvQIDAQABo3kwdzAdBgNVHQ4EFgQUeiOd/KJruBCKEWlD
4pjFlBNVC4AwVgYDVR0RBE8wTYIZaWRwdjMuY2FmZWV4cHJlc3NvLnJucC5icoYw
aHR0cHM6Ly9pZHB2My5jYWZlZXhwcmVzc28ucm5wLmJyL2lkcC9zaGliYm9sZXRo
MA0GCSqGSIb3DQEBCwUAA4IBAQA8sD44qkGN2qTfss6G7gb6KULCHl7uN1V1dhit
UOQDyD1JLTYAFA9M82ZymxMmCing7kBNxzbX9Kow1hH/oIzXVHBxtXR8e1PpnSor
hRvaRkKGaZKWBKWzpnpvuFxFde5WXHZ3oN+iRWQm72h+2mVgUFKddhJgRzrOcsaQ
BXhWS2GttzW8RQ2g5hvE8hW06VTOPU0nogEhhD6QfuStFEYy4bS0gllLMEi3sWn3
uqc0g5R+ckcdzVjMFxREszPE379gA5JJ0wbAEI2x+xeQHB+VX+t+7ZK1s3cW7Kdg
0A4gCgFNUKM5N110fTv2Z9vuXg+0wOHi1Vls5M3xKP/jiFUJ
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDTzCCAjegAwIBAgIUe+HmS2XtGqD33xRNH8NS/hzsHHMwDQYJKoZIhvcNAQEL
BQAwJDEiMCAGA1UEAwwZaWRwdjMuY2FmZWV4cHJlc3NvLnJucC5icjAeFw0xNTA1
MDkxODQ5MTdaFw0zNTA1MDkxODQ5MTdaMCQxIjAgBgNVBAMMGWlkcHYzLmNhZmVl
eHByZXNzby5ybnAuYnIwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCb
wHY96htdhBVIuafzWgKqbdnAqPX2OBkjg/UNaD+q7g4QuH2AQuNu6A++Xt6FT+Hu
UaR/kY0GdokUjQwrdLFCDWjQ9TAuyLWE7yMcaYGluGBfQrzf8YI9oMkTuVEQs0P1
YbiliQwFgRTb7Qj7dpWZq3bJW6yenj0r3GZe+LRzDvvGov+R6QVumafEyTbIX1TZ
d7+cSoRYvavWhl9v+gFbOSWJl7sih+8T5ofNkPsDlp+ckhMzpXlcCe5z/Ax43l/A
PWuTqH1Y00a4TEz3aoBh86QQFQyzRgpLOOeWttLm5rMAVCMCTB8bEuFdBI8CfWF6
tS64RQmsD2VIl8VDZud5AgMBAAGjeTB3MB0GA1UdDgQWBBQ1ic3pSYqhmfoSm45Q
d7HgfdlKoDBWBgNVHREETzBNghlpZHB2My5jYWZlZXhwcmVzc28ucm5wLmJyhjBo
dHRwczovL2lkcHYzLmNhZmVleHByZXNzby5ybnAuYnIvaWRwL3NoaWJib2xldGgw
DQYJKoZIhvcNAQELBQADggEBAHZ4eT5oRAxBfGBAIMDtUQym6gZAei5W03xSuxiB
s3I8LjNu2qPTVywZphon/855+Xh+dY7tqtBPcrKiCS+tnDkkWD14PdwAnmsj89CO
K3OKM58MCjI2ASjxl1hk/86uK9nCQnZueqg3j3fwyMD8m29AB9evIBNvCFQEPku2
FwK3xvf5nFoJwBzWJO2YJvqucXyv84OL7Hz282Cem2PDZb40SehaBQoiopCzKpos
EwYorZYoSqZEXPxWewwIFP4i4wxC0PjzRRh2kogbFqfFwDHLXCkaSoQjuiik54ay
D7O3oRtw8ekY+9MKOEManL6cDrupCcz+T+Xr18Z4L40NjCQ=
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDTzCCAjegAwIBAgIUJR0TRnEIPtwqa4q4tXqB+82CffkwDQYJKoZIhvcNAQEL
BQAwJDEiMCAGA1UEAwwZaWRwdjMuY2FmZWV4cHJlc3NvLnJucC5icjAeFw0xNTA1
MDkxODQ5MThaFw0zNTA1MDkxODQ5MThaMCQxIjAgBgNVBAMMGWlkcHYzLmNhZmVl
eHByZXNzby5ybnAuYnIwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDX
AkwQ0OvObTpMFXfuZrb0WCdWqbeb5mr/NZ3wUrRKvfuW2edJmeFf0CS2HigEpANH
2qYWLWQFg2qHjSYVFzsKa1lHQ+LziSih7+GRB1kq0EqmQcYOg83KG6p5pFJDcTL1
tzAt/tSaisgsyoU0GxD9RFrlwyrIEaZjc5y23YB8lRUDbGe2voPQCWOz4IyVjZX6
gTa9yE2H8Ltj7NvP3JeZmu6NGMWUPpKsvmVni+6ZzM/awZSIH/odKZlZsMvmXYET
cp7a41H5D9Fx+n9sapXtHHksOFOprTvVFpQZU91EtZDfPhJqOXX9032gXR6FO9VQ
hhMJrrxRAXeaFYvxRNiPAgMBAAGjeTB3MB0GA1UdDgQWBBSboKrrB98MB3FjatEW
Gxv1INen1TBWBgNVHREETzBNghlpZHB2My5jYWZlZXhwcmVzc28ucm5wLmJyhjBo
dHRwczovL2lkcHYzLmNhZmVleHByZXNzby5ybnAuYnIvaWRwL3NoaWJib2xldGgw
DQYJKoZIhvcNAQELBQADggEBAMaRkdaNJZDjIbDuZ5jUdIcPJu8vrZgPruRumDsJ
KhKE8RmO0Ibi1MtssX7xq/KfbRniDRqdlnfdZ41WrL7uKNL+ayOwEPaRIlGgpyTi
Y6n4pJ+06FQ4u4HnPjWszKSlJbyTKrPCeEWP50QC88tXRRAeOKqW5sJ3UVaHHkyF
ybmTuJKkjFgMJ/O0QLysuygCGimmz4D398qpoWKfkWiNHJh0UuFj7PYg2JDAcy5P
PCPlfCY/er8FqxDA/LOQnkK7H6/hb0K9wMBHLtBlVSf93l5Kt2qrE0ChlhfEhkW9
ddoYD7X/e3Uh+A3BfBjEe6RpsGFMS2qx36shb+SEKO5rKOo=
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP v3 - Universidade Ebling Mis',
    ),
    'Description' =>
    array (
      'en' =>'Shibboleth IdP v3',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP v3 - Universidade Ebling Mis',
  ),
);
$metadata['http://idp2-openam.gidlab.rnp.br:8080/openam'] = array (
  'entityid' =>'http://idp2-openam.gidlab.rnp.br:8080/openam',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/SSORedirect/metaAlias/idp',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/SSOPOST/metaAlias/idp',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/SSOSoap/metaAlias/idp',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/IDPSloRedirect/metaAlias/idp',
      'ResponseLocation' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/IDPSloRedirect/metaAlias/idp',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/IDPSloPOST/metaAlias/idp',
      'ResponseLocation' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/IDPSloPOST/metaAlias/idp',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/IDPSloSoap/metaAlias/idp',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'http://idp2-openam.gidlab.rnp.br:8080/openam/ArtifactResolver/metaAlias/idp',
      'index' =>0,
      'isDefault' =>true,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIICQDCCAakCBEeNB0swDQYJKoZIhvcNAQEEBQAwZzELMAkGA1UEBhMCVVMxEzARBgNVBAgTCkNh
bGlmb3JuaWExFDASBgNVBAcTC1NhbnRhIENsYXJhMQwwCgYDVQQKEwNTdW4xEDAOBgNVBAsTB09w
ZW5TU08xDTALBgNVBAMTBHRlc3QwHhcNMDgwMTE1MTkxOTM5WhcNMTgwMTEyMTkxOTM5WjBnMQsw
CQYDVQQGEwJVUzETMBEGA1UECBMKQ2FsaWZvcm5pYTEUMBIGA1UEBxMLU2FudGEgQ2xhcmExDDAK
BgNVBAoTA1N1bjEQMA4GA1UECxMHT3BlblNTTzENMAsGA1UEAxMEdGVzdDCBnzANBgkqhkiG9w0B
AQEFAAOBjQAwgYkCgYEArSQc/U75GB2AtKhbGS5piiLkmJzqEsp64rDxbMJ+xDrye0EN/q1U5Of+
RkDsaN/igkAvV1cuXEgTL6RlafFPcUX7QxDhZBhsYF9pbwtMzi4A4su9hnxIhURebGEmxKW9qJNY
Js0Vo5+IgjxuEWnjnnVgHTs1+mq5QYTA7E6ZyL8CAwEAATANBgkqhkiG9w0BAQQFAAOBgQB3Pw/U
QzPKTPTYi9upbFXlrAKMwtFf2OW4yvGWWvlcwcNSZJmTJ8ARvVYOMEVNbsT4OFcfu2/PeYoAdiDA
cGy/F2Zuj8XJJpuQRSE6PtQqBuDEHjjmOQJ0rV/r8mO1ZCtHRhpZ5zYRjhRC9eCbjx9VrFax0JDC
/FfwWigmrW0Y0Q==
                    ',
    ),
  ),
);
$metadata['https://idp-saml.gidlab.rnp.br/simplesaml/saml2/idp/metadata.php'] = array (
  'entityid' =>'https://idp-saml.gidlab.rnp.br/simplesaml/saml2/idp/metadata.php',
  'contacts' =>
  array (
    0 =>
    array (
      'contactType' =>'technical',
      'givenName' =>'Equipe',
      'surName' =>'GIdLab',
      'emailAddress' =>
      array (
        0 =>'experimentosgidlab@rt.rnp.br',
      ),
    ),
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp-saml.gidlab.rnp.br/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp-saml.gidlab.rnp.br/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'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',
    ),
    1 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'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',
    ),
  ),
);
$metadata['https://idp-2fatores.cafeexpresso.rnp.br/idp/shibboleth'] = array (
  'entityid' =>'https://idp-2fatores.cafeexpresso.rnp.br/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://idp-2fatores.cafeexpresso.rnp.br/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://idp-2fatores.cafeexpresso.rnp.br/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://idp-2fatores.cafeexpresso.rnp.br/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://idp-2fatores.cafeexpresso.rnp.br/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://idp-2fatores.cafeexpresso.rnp.br:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://idp-2fatores.cafeexpresso.rnp.br:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDbjCCAlagAwIBAgIVAJQXxSiWuPvpzzVKbajF2+Jrc5IkMA0GCSqGSIb3DQEB
CwUAMCsxKTAnBgNVBAMMIGlkcC0yZmF0b3Jlcy5jYWZlZXhwcmVzc28ucm5wLmJy
MB4XDTE1MDcxNDE2MTYxM1oXDTM1MDcxNDE2MTYxM1owKzEpMCcGA1UEAwwgaWRw
LTJmYXRvcmVzLmNhZmVleHByZXNzby5ybnAuYnIwggEiMA0GCSqGSIb3DQEBAQUA
A4IBDwAwggEKAoIBAQCHSg/G/yeJ1y8GSN5q657PZ3AbBZam3DGCQ6h19XEiL+N/
/tmP24tXO5rpToLI0jXbofc4YHeyzmTpGdlHR5tKy+lvfxFvI8/Ac821cGMsbspH
Cp6pb0owyBEGKd1XHy+CG4n7XTxn1IcCyOIR4FvDDCIlcwRZ3y9nAcB7M8rHH155
rTVvx4cK2ozxYY6V2xVnAsrAq4UgQU19KifJlPe/ZnNk0ASw87DsDynuDHSMRfeD
8APJTue0qAPyI6COoSiPGkWOLO5FexmcmxIGIHdoNAAVx2uFYddmmcv4agWssjjF
mwd+2FZmW83JccFGjBZ+ppOv80SsoZVuAcK86/uXAgMBAAGjgYgwgYUwHQYDVR0O
BBYEFHLlT5Aa9xk/vsuqY5myVqtEbHCaMGQGA1UdEQRdMFuCIGlkcC0yZmF0b3Jl
cy5jYWZlZXhwcmVzc28ucm5wLmJyhjdodHRwczovL2lkcC0yZmF0b3Jlcy5jYWZl
ZXhwcmVzc28ucm5wLmJyL2lkcC9zaGliYm9sZXRoMA0GCSqGSIb3DQEBCwUAA4IB
AQAnTLP4OD+iZ2EdwA27vcgyJwFudKdexRAJMdjyP7fZOWEtxacvvRj2WZSUlp1w
xu3oLIsTyG2jFZdijTSLeEKlxXwNNBl5sFrkB2NA3DZEThVxFFq60vhIKPXu3FdE
HReLJYYbsNu7jsSrKxMnji0OtMfYJyDF5xREvsMy4be/pUC6pqoR2zJNjUdSjNPi
xUk+qNSYDvwtf1eyM3SzctHBBx5Av/Ras85w1tV/HGv9sdD82qI5/E7Q9gCuvgU1
Oh20n73hpkzFdPHAIE8FI2VK9A/ErPdmHt6wbW9rfxoKf+UGtg+MWxTmMy21s4Iu
f73siC6KjRLiK3IL0t5sPRXZ
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDbTCCAlWgAwIBAgIUDwsmJwDWIO8AMnt5hqwJm5O0i4owDQYJKoZIhvcNAQEL
BQAwKzEpMCcGA1UEAwwgaWRwLTJmYXRvcmVzLmNhZmVleHByZXNzby5ybnAuYnIw
HhcNMTUwNzE0MTYxNjA5WhcNMzUwNzE0MTYxNjA5WjArMSkwJwYDVQQDDCBpZHAt
MmZhdG9yZXMuY2FmZWV4cHJlc3NvLnJucC5icjCCASIwDQYJKoZIhvcNAQEBBQAD
ggEPADCCAQoCggEBAOHicKy9PwwUUOqrZM2d3ynXRvfRl8CHj7o0Vc8QMTCQ6kP3
NEHV+Mkgf2EUuzfZf1acHtI95Uc9S9m/sJs5TdkFJUjsw088FFaOkv9phAVZXPQ/
1kwZS9R3aiQb7X6Z0JFgUnfyM1Ue78Mc+8XULIH5gfCyRrei/5vDIYhi1N/zhoOa
BM8/3uDnCSGleSNU0CY5kPYLwBVkb0avN99fzkNIb6hL5jmfarSxm5PDZ4I0pRm7
95wJ+GdH7EMj2cyrCIJ+IKpIwwBWWQPTWC2xkOcGntPLrTyb/kHKGYDaogOPV7is
b5SsE2cPNQARBBk6F9XTPZH3HNHUVYcIYn4EquUCAwEAAaOBiDCBhTAdBgNVHQ4E
FgQUgUHGPP5zN/jbfrvpfN+z8FFWGDQwZAYDVR0RBF0wW4IgaWRwLTJmYXRvcmVz
LmNhZmVleHByZXNzby5ybnAuYnKGN2h0dHBzOi8vaWRwLTJmYXRvcmVzLmNhZmVl
eHByZXNzby5ybnAuYnIvaWRwL3NoaWJib2xldGgwDQYJKoZIhvcNAQELBQADggEB
ADCzFFieY7+PsIF6+Y/8wQcrtywskTg5Vmi78NZYTadfQCT64njhZaKD7yslPl02
V7u3lepPqRyKLvMZOZ47ixLG9xzJgSe3FbncLP5j5z+U2oxjlG73cPrQntj5O4xx
zT0HxKjycQ/yY4ga9Z0xoMWH6J37DgAKoHFp2c9gcgnskTcsgWzK8K1AwOqxL5Fl
X8rP+EpnfyJu1PeKHshspYGsJnfgIqSzKP+Hb3UhW7Dz4SaLxs54Q5u7UAIoJnc6
Axf1OSLNbIXzG+9oEA6C2jj6NRzH1WgpP8NH4zPy9zr/YE97Lz7gcr8VTOpmxAcn
0I0FUS8jn9Qe+rViLDIG3i8=
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDbjCCAlagAwIBAgIVAPXteP1o3xRGNuWjYjjukFH57pB3MA0GCSqGSIb3DQEB
CwUAMCsxKTAnBgNVBAMMIGlkcC0yZmF0b3Jlcy5jYWZlZXhwcmVzc28ucm5wLmJy
MB4XDTE1MDcxNDE2MTYxMVoXDTM1MDcxNDE2MTYxMVowKzEpMCcGA1UEAwwgaWRw
LTJmYXRvcmVzLmNhZmVleHByZXNzby5ybnAuYnIwggEiMA0GCSqGSIb3DQEBAQUA
A4IBDwAwggEKAoIBAQC9j1pgBDBn7NZ/jtHbRZ4PS7JT6VPJcaFEPoHiUy+cUsEO
qlBVh/ih9qr4DqnDcI0mXyreDVMWWyHYk94oVByjzAZNKl1oIFkJoA3AVaJdjSal
0m5LRxa3zGjupn5818HBV4DktddRlG/FJSERx3UEBUmM7Na2TECsvRcvpjJjHJmy
JtYFHgKgNjQvQ5NcZmMn2hkxntgaNc8B4XJilYmKmnpQD5KWNjx18G/iGvJoZO9A
NmXClKVTNmMqMpauhts2Kght91EjRlww97fcC5qOWjcJO606Ln+yNWR10sANnYDK
NAEb4ToWw6snIb4uqyGfXPbAPqzw1bZ6kfpopbSxAgMBAAGjgYgwgYUwHQYDVR0O
BBYEFERXX5oja7Ayti6NcdORXh4WPcsNMGQGA1UdEQRdMFuCIGlkcC0yZmF0b3Jl
cy5jYWZlZXhwcmVzc28ucm5wLmJyhjdodHRwczovL2lkcC0yZmF0b3Jlcy5jYWZl
ZXhwcmVzc28ucm5wLmJyL2lkcC9zaGliYm9sZXRoMA0GCSqGSIb3DQEBCwUAA4IB
AQAVu+Wdm9o2g2RacsCMXYewXwrxlNl0A0ty1Cl76UEozEK7YHKwycbV2ZJ6KJgE
QkCPiftxDrsRhi0AMrFpJ/1wNrQsGL1RGE3etybqFwyAGv78TUAp+RssS059ZejN
9J/jZtYeRi1uonXCt55hDF+Gklv/o0z+U3FElFbmXHHCtBxI1PAKVA75VQQjOH6H
8Ml3xsmKi5M+dWC5o6V91sNT9NJ0NIMPcn3AOoam5YMHKFMV6VbaWiPHcFUA3iJ7
tl61q+jcKv4jFU4oeleZGNe8C1ZeMgI/IirwqmA7IDrbS8cc9Rca8jNyTWZBe9o9
LgvOxBAzMQxp+eN3Z8jrEmY2
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'idp-2fatores',
  ),
);
$metadata['https://200.130.99.163/idp/shibboleth'] = array (
  'entityid' =>'https://200.130.99.163/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://200.130.99.163/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://200.130.99.163/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://200.130.99.163/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://200.130.99.163/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://200.130.99.163:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://200.130.99.163:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVALN+OG7Bl/MBWCLk1k12Z0ePzDEnMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMTYzMB4XDTE1MTAyNzA1MDUyN1oX
DTM1MTAyNzA1MDUyN1owGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4xNjMwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCBdq+9HglrQPQTy4m0aViQVLxiikvx
U+ZmocBtPsmsBKdTJ++GMm+P1vSZS7N98MRf/DZ259GQubdcgFsCiu+5kB4zZEK1
G3lABHcTHWJOqiXV8VcZ9DRaSNqBrEJYKU7NHiOcaHIjFv2ydL17Hu31Xk59u+68
Woz8m/MxGCQh7Aznw943iUH+hhRI99JSKO3UlEaneFPGf+/3MOL/40/AeD60bAjo
NUnhIBhRW/UC7PmJkbevVuq0eV0UpAw2wl9+vmmmkTCDzFRmTsncUW/1EsScNlol
+8TRcu7FwL6yzbLMKPsCFIKO/ZEW8NuK9Xl6OhxFIruP9VjzfwPhcRB/AgMBAAGj
YzBhMB0GA1UdDgQWBBQ84wsTd6Bow9RKgoFslJMnb5I/FTBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjE2M4YlaHR0cHM6Ly8yMDAuMTMwLjk5LjE2My9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAYGpyclsQGVSarMO3py4eCXdDOEHbQOa6
lH9UpF34Y0PBFx1ypiKiX6PRZRb68ckp4efjCP53pi67b9XXcRliR4OFcA294LAF
h8i8pqs8/alI+eZnKAr9750Cqh5hVcoJOsweSXY1vJwbco0Cr2WYrtgLI5X+tWRH
j425OT43ep7f1BaXeaDV4zWa2IwPurYKhthS6tuv5pKVr9o5+AXLPRkad8B5ZHF4
Wp9ryKD7myEmO/7XCzfcndyJQpMvZnbr0n5DsEP2y71K6Yc6gHIlwRAF2dBD4tpT
5njoI0p+YbZVIXjvmquJZgHARufkz3bD6GqGvt383PDSCH8dCnCaeA==
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVALcVC8BDMHvWt3DPYIw5lj8ikOB+MA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMTYzMB4XDTE1MTAyNzA1MDUyNloX
DTM1MTAyNzA1MDUyNlowGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4xNjMwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCREBVmRkey4AB+dw7jvNi1GN8P49xf
NMrW3cMjOorxKTE6Pu+dKEa5iBoOueLIaSwpYnyyf4JvcBM9f653rlT3Lb9HVtJq
6sxSfXgOnYtJABjQ82aV+2H8bstGK5Lhh1Xy7OPFUM46pFuEU5RTsbZKgSXZapfr
lXKAZE9CkUM3WHpCqAUBNjvsRD+vYeRoZS0rhsW7qkBhoS645RjYZpgsxlNv9A7p
RjiaWDmHD+BQGMs7+8JmG7sh5gOBl7ilF3w2qGFiGHu2wA+tVhsqxaDwKapHCakV
MN7xBkw9RCXEZrS5LgTSgGd4vy1z1YSbeUa9fNRNOJrNGOnZfmYSjzQ5AgMBAAGj
YzBhMB0GA1UdDgQWBBSZzPpoZQvUY5jGLtYCfnaprD3lCTBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjE2M4YlaHR0cHM6Ly8yMDAuMTMwLjk5LjE2My9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEACS2xzWhmjDksXMg8e4eREniAid7feTWw
azqfxGYCgvq17n1HPM4LaXZYLj74dBVlkwMPTm9wZXjegUXwuzEKgLNPdzDo32+I
banNfFeyQzd6jBGG9rEnciaoYNMVoMe7lIsUmC24SAeruOx/slw3Et7qh4ykkNsF
AgWBMjABiMgL2xTN7+vlnXNbigkoEghdmb7ZS5alqMn+QpzpT+g0efEnXWq5S08l
PCJY16TKCpvpsmu+QNWEHcfetqOM5HpIV1kpAGTuyTPEKiYW9iTh0bIbcXH1MaVP
ZQj+qv56y6cSzsyuQL7lecqoo51/nEVc4omGlc168lF+xE+Q1Oym9A==
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUH1jB+S4ApSri/ZXzYCIWQvB2Pg4wDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4xNjMwHhcNMTUxMDI3MDUwNTI3WhcN
MzUxMDI3MDUwNTI3WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjE2MzCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBALD67WeNI8sHULbx4b4pRzFTrY05wnCD
pSpQCw/Je7E3PkDmb0rLWos3f42rOsA/WIGx5GiCJ69rw48WI+AyBtphYZlOShSU
IT36+berrp10HVgtsuIUfnnuzusGBl6bQod4IgFOaKOwaF1v1hBWqMZJBrGe6LhP
PwnimA+RWvN+cE4OjBhE8pI/yRXKNDfQdY4YKTcd4E3wgezptx9RiYLjAuqnpyZp
+XFHRa9ZJP+lNb9l3pVQeY0KwFdSgalEQXjE6IxChKAPd74iuEPV3NnkCad8un9D
4OyX63hgF6baiA2Z9dYrgoJhI8fwJ08BEfDVBgVIhlH9cwQrDik421MCAwEAAaNj
MGEwHQYDVR0OBBYEFLs1DmQ27PB3gSn1fxTXjfD5xrJRMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMTYzhiVodHRwczovLzIwMC4xMzAuOTkuMTYzL2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQBBEyBNWR4XvZu5k8sGJBdYoQBqu+YEysD0
qz2ImGGf8XhBRzGiqVw5c7HKK//uiRgW1nxgvbew0LQzKXGbfpX/Mraf/EIoo8Y8
DRoSrI4pzcB7sgAJ9/2qmmgXRYHr/DaYCzg5zJ+bbuWQ0t3Wv7tXpMBu+HhittzN
VU2ZrAIHgEIcUKB21LQ+ZZaPFPgjavZak1dDrGQ8qGzg4ky3uNKlwjQ1hEbeKubK
Ne86bPho8Q4/tDXF4H1w1g0jThGgN5C4+4AaFeumjxrcgXJyxPg+nOPT4jkQiqy1
V7LUEWaWa2LV6b1KIUUcIwwbf4lrsblsC9I6QYCUDv85fstVJ3w7
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP1 PGID',
    ),
    'Description' =>
    array (
      'en' =>'Projeto do Programa de Gestao de Identidade',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP1 PGID',
  ),
);
$metadata['https://200.130.99.165/idp/shibboleth'] = array (
  'entityid' =>'https://200.130.99.165/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://200.130.99.165/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://200.130.99.165/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://200.130.99.165/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://200.130.99.165/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://200.130.99.165:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://200.130.99.165:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUGmKmyBCn/8IxeTbXdsV7ZB3dWpEwDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4xNjUwHhcNMTUxMDI3MDYxMTE4WhcN
MzUxMDI3MDYxMTE4WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjE2NTCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAL65qk/ATPVN+EySjt1cBxpw6R6O4Qnl
KV5PvSC+u93wdNTSHd2mCQry1bBLd8hmTJ6VAjCe5SFQowISolYbG9B8vYKkWqIg
zDYfhZdZwTu7yHGpCd+WQKj4Lmum8QatTByzrLhkbILVU7cYu9uGPmBYiAz2bmEl
p0/rIl+uUkzwsKd81kkmWS4XQShINfyJ1pukNG/O7CH3dSnfcfRaIyZoDF5TNNVD
hA68USOhTBgGZ9zs2IaI1wpl+nn8iR65tUJ1nYznuWKAvW0sDxryii2IaO7LdDP3
SRoKl5gXdwZF9qGrGlaIKXqkZDD5o87omwMDgQf9b98i5kOlYWtazGECAwEAAaNj
MGEwHQYDVR0OBBYEFPg81dxCu3jeAApX17QCO7pGN4bTMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMTY1hiVodHRwczovLzIwMC4xMzAuOTkuMTY1L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQCCrIEJoOJvCC50D0lWmmSvOaVMOTjF2Bkz
KH5ZXHyLq9S30jlReSTyayrdiIJMgoxGT+jMElC6PIN7Jqkl4qjBujET3zPTyJu3
uZ1h18halb3iW1OKdMAH40hUsoPe6SicRErOZKDXUaUFEuDHMYtEhhA+dnuVaRGd
q4+z80d9w40UaHzoxcjySqphxhDTaW+YTtvopIXLjegnv/gIy+qSuBTZlMCPsrWH
eRX2KS7injqlWZXIq1FtaUd8H/QucD1/g4Lh4VmNLZJ2SGwPOBLQ9Yjh1nCyFe0d
j2B0qbRCOhjMIbCSSa2M/LzJBWgcsQ+IfkSqtotLA9GSaujqaoDH
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUTGSXeeYsf1FBD1l25lKjbPpCyyIwDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4xNjUwHhcNMTUxMDI3MDYxMTE3WhcN
MzUxMDI3MDYxMTE3WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjE2NTCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAICpFCVdof04MxqoYqzuQ1gpt4hIs9RU
9zcMVN0p5Q8PBTj8x5Yc/6fqjkOR29DH4Wm7UE9jVFn1Bu8Vtwu5k0KWwNKNeh2l
+1TuCwioq9/EDzC+1XaM5CBKRh4PrjN+iC9jcc2hCcvVGPuUp0DKyXC1W7yaTJub
rTcM5FCYzE4nG5W8SMtsinNo+VSyuwpvBD5u8ZqlA/XdrzREoX4ARYOyt2J5+OXE
4dTvSlj11WvHn1Plxntvg5+DWe0xh9S7LvY31Fj+1JP6LNtYBl/de5kIJNmw6Xty
AWPfX6UiRaLoLHa54NnMfpN2u7POQqJOJBojgSBjy0fe38XlZjgrSfECAwEAAaNj
MGEwHQYDVR0OBBYEFLDS0xW9siU2D5sATDrH6BVp06wGMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMTY1hiVodHRwczovLzIwMC4xMzAuOTkuMTY1L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQB+h/8F3n6lxPXyOicMpEJ7yTkWtJ7fk749
ZSy/pzzQ7nFEq2EDG3fk1PD3tZHh8z2bKBciqo1HIRwbniBMV0fChMD3vCc6IRky
LfayZ+vZyLvomMD/vOneMAEo0FCdccMoiZ+SGqUJSi6QXWtoTI/3TE2/owawUojx
zns6Z7sOIpnnEVsaGOanZB/uyU+3VIWOr7O/g1zhkPbRNOi1XJyJ6Gukhltah9j7
kYWQ5sg4kG/dFwHAvsAKNY7xVRtbNWYlVDpdSYKZ4Qdb6Ayne3Qbsv6I8wDSbimq
YJTCxUo4sZYltUP/qDALEOr/wfvjl4tMWefn5Qtbf45cvNvyAkQU
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAKiW0kZCWiGVfmfI5kOr+pvSkLBcMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMTY1MB4XDTE1MTAyNzA2MTExOFoX
DTM1MTAyNzA2MTExOFowGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4xNjUwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCNRdgZMHLptT5YIuNPLSWiW0i8lof3
CAFg+7KiuHFEox8Np0zhaplGxiZkAcqKu1bxQwSMzgrkBI2HfkM5zZwTSi2+bt9K
QiQOX8sYnMEk4pvCftV9/s1iUUvB72Y/PdoIZlVE6lqU9gAhEKg+aeVHJqXhqMiO
CxJ2jOMoj2AwXOjWgNg8myI6HRkyszLEI1tKs9M/JCwriDF+ci1ESv0tRlLUg1As
FFB+wZUDwXEin6/JHnM4TNUDgszU0fON67c6g1l+O5wUJ2r3D1BZ8IE7mcL9vEaT
8RJ6sZKopa7E3mvLIJEbVQQ+Rpr+KtC7Wen+6UUqhORMETPmaNFB1nGRAgMBAAGj
YzBhMB0GA1UdDgQWBBQeKHsdeBlIXz9QDecC9+VNyz1IeDBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjE2NYYlaHR0cHM6Ly8yMDAuMTMwLjk5LjE2NS9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAUv9fbal8ECY5b8OhXMcq7o4hfPJ9y9Wd
DyBL1gYPAC9m+5zuBqI4QkyvMxB+oQOHXaStxq/+ybwFmwZ0BB3dX/eU8bMXRF7O
GD4yl+N3Hw/5OsbdocQqyENluCy1WNpP44Wz92EtWrEuTFH3n66z0GMk514IDyIC
Ae+YO+wwlUZE2wBNRRCjTIy3ZuuitAmNMA3o1J4y9dpLDcv7H2obQKutP5yRdeGs
Q8D8S3qeubErsuxp9y989nuOdcmAPYS6TwZPVmthjFNrrJqyXW3lMoEImq1TQjRY
JlNlYQ67z6kgGvWCYZh6ZuvSbbf+5NitqnId1zS7yvdFTED90oDKQw==
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP2 PGID',
    ),
    'Description' =>
    array (
      'en' =>'Projeto do Programa de Gestao de Identidade',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP2 PGID',
  ),
);
$metadata['https://200.130.99.238/idp/shibboleth'] = array (
  'entityid' =>'https://200.130.99.238/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://200.130.99.238/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://200.130.99.238/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://200.130.99.238/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://200.130.99.238/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://200.130.99.238:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://200.130.99.238:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAJGCIGdLONfXdeikka6t9kK47h0eMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjM4MB4XDTE1MTAyNzA2MTcyOFoX
DTM1MTAyNzA2MTcyOFowGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yMzgwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC3soUncgix508aqPQ3YhpnFlJJYoTy
wSFepVhqKQr5Su4YxlsidXoYdY4Q2XInorjBrlRmf0gUiJ55K2trsuxR5RDtYU2s
mVAPIRzgom9AaL63Fd4nO3p1lgFNcAciTY3BNYQwUqLv4ENsezMexWQIcIcJjj/L
6FpFU69tBOmHcGQFVc9ZaYTf5frivaPqWo99l370xpSOvcw7y1995r3pc3thao2X
LtCCDMWKCC7bjWgbpjGchdmfeRvCyDKpZslMj9ksvMbQCy9FvJ7PIhnzHbTKbgqh
bVcBsh/rpxWMzRVdbDUn9cfEXimgOMyRKkrH0YH8ZZg2naC6EgXiy1LVAgMBAAGj
YzBhMB0GA1UdDgQWBBROTM4iLiQX9l8JA5IhGxtIDpIWDDBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjIzOIYlaHR0cHM6Ly8yMDAuMTMwLjk5LjIzOC9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAib94siH5wmHwTlrL+/V1Ek7zq4QTQEz6
oRpgV5Rkpj3Ezt0aKRBlcnKZoijoVsdMFykIhPF1/EzVcxPXg4xnQY+BUz2Gwl7q
HI65LxaMDCOXQvcnDbpy4l7VDvisKyUAtWSrgo3XC9rsqWL5L5vpn35kdKn286LJ
qoSXjhhgYDZ867veiVbXhyxfL9cTnrmitIKO4T0EhBVjZsaLvlsleH5mB7jnPjGR
reg2yIys9vhRScB5v6f9uXVU1GVB9HurHREjjZY8fjHJ1ncWa69uBek/SKDC3HUO
gmem2+T9Xu4Aoy5WUEM2V7KTelYcssFsOVsZxH1jtxu+BTZPMyxS0A==
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVALRc3LgYa2nFsjyp5gB6cl+t2e4+MA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjM4MB4XDTE1MTAyNzA2MTcyN1oX
DTM1MTAyNzA2MTcyN1owGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yMzgwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCTFmPHhbI8BPi4Q5vnsTGfUEdHY7wC
sjRraiA8MXcrFIzyoDMcaqtptepgif0i9grD7J86nxo8yj+hfpoIh+4XPO6rEMif
1YGC0P/oQCJIVLqEyZYmqsp9oYzGm02+ckzjxJEpdJtbBQ7bXVdsOkCDJvb1fHkM
z6U/PubUC8M/Vdj7/77QI1aM9sbTevcEZPs9ojAkoEawIU/KQmO5eh/ayvZn+JiT
ks3UDvBjRSHzlX4CF/8HMTTHwDYddBy/TvVPUKTaEfpvDTqRGowVAEK8Y8xAaQfG
alf3YN/M5VF10Oj0e2iLe9ZvcNBTjsbBQ0Qmc0Re37bD4JvB6tJtT9Q7AgMBAAGj
YzBhMB0GA1UdDgQWBBRg8jWUjyPw0KlA0NBnOaCdGG+HADBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjIzOIYlaHR0cHM6Ly8yMDAuMTMwLjk5LjIzOC9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAdGbZ8X15wc0JVBHPEtvi/B5cHuPbiZPX
dMCdnD1zKcD5M+l6ZsVXlx1pKLsLXABnxtVoEZzdIHS0bjSwADZfOKLtd+KnZ1Is
0puXBM4jfBasdAmoWQ087jEu72IyJFhWT36woNabYGxuUYZYFz+7/qdXD4Q6iJjm
w76V0gkzwc1XyIIX1QSEb9+Dx9AQ9+m0ur6QMtRstDekOYz0zh1lmQty7bfkLQFW
Jpyv8gndbHe/MjxSUOfKE/WgEIA5NXWX9UFfyvldkkOFbchZRl5MhaVESajwJAFu
CV2KrOw4doGXdmVbImDZYpx4Tjqm077e7ynDS7tJekCPMvSOH04svg==
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAJbENMi687RGBq4u+RQf4oBnDMeSMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjM4MB4XDTE1MTAyNzA2MTcyN1oX
DTM1MTAyNzA2MTcyN1owGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yMzgwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC/UHjgn6189ll1iZSdMK7SiL3ZeTXp
GvEUYDCsxFKiuouC+3hjsNT1EemcQ6V9P2MWkmTMueb9SghuPKE29j+geZaB4BP1
XEcxx13jZdcpYz0uXZcRcj869h8P4bZx5jJYKjaF8ZljObZ022eqQxMYrM4EORhC
eohRlViMB6LrdoezBY7YAI21BXhc3QM31MeUgDSuGbSTcNSCoPuNztVQb4bTxXPA
y2oPEhdvcgMBf+aaO+DSaPhLldhQFtJIvV1ZwnNNkUCBm1D+hLN9B0Pz9bhLQxTO
ETPtOnwIXNU1IEN67BWyLJmc+OTyp9FhP/fYR+rOYNd8gBOrIlcoFbf5AgMBAAGj
YzBhMB0GA1UdDgQWBBQOu9ML9i+v/jDREW3dlNN5VamhezBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjIzOIYlaHR0cHM6Ly8yMDAuMTMwLjk5LjIzOC9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAD1EnDgYw5G2CDbR0xZjSWPylUHoTTx2R
OR+dCaUX+5tfRETivLWHgZS0516UWwYgPOHEyW8gWBWQ5fqq/Jq0IvqcEFYrbJYP
bbt+ojs5y85sqYwspOaQiIq9TP/svqkMvkzDqojlHv6OuqyEoRFoOOTSkvly9alM
+1Neb0TN5txyJZaS/z67Zo91IGsAa/o1jdCRtR1t0uf3QHbDrr95qIpWqoEZzhVu
xWmWJfwi+fbaKYSp+5vZN02xNMC9e6P0ApYA3/fchR7g8VVScFhoyuFajh7Y+mhy
jUKMRhJMCs+fUqQMjGYIOVt7MzyBLFbjVYNoN+BlVFa+zNLKmBHc7w==
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP3 PGID',
    ),
    'Description' =>
    array (
      'en' =>'Projeto do Programa de Gestao de Identidade',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP3 PGID',
  ),
);
$metadata['https://200.130.99.244/idp/shibboleth'] = array (
  'entityid' =>'https://200.130.99.244/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://200.130.99.244/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://200.130.99.244/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://200.130.99.244/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://200.130.99.244/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://200.130.99.244:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://200.130.99.244:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAOBgw04CF+OHPb9OaTieycVrThFWMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjQ0MB4XDTE1MTAyNzA2MjMyMFoX
DTM1MTAyNzA2MjMyMFowGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDQwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCcMGM+4XESYgCvlNtooSatUFj34MNE
R6OFk52NTl4SHXT0Yi6ZQ10Rl66dD+1ddB/ZeZmiEKdRG5/vecSVH5kgeIxjETj+
BcrWviVFCdyijK/Vf4Fh2HY/x1xYaQfRv35u/wfjqASvJW5vp462G1jsy2z7okWe
Xzlsh4BueGywaJbH0OLXW/PQoZVEVpTjeb7LGiztfHushxmlTLhFLHoEp7QJxg1y
Brw9W3BmKHF9b6D88YvkwJw+xEriTWhC6FKLzC83D22ScSmcSSRCUE1d9mEa3YMi
LMwGGRO7JNKqKZ40XttrpdzUZkwY81+2V0FPzJaDpFCdYXgiZCqsjcVTAgMBAAGj
YzBhMB0GA1UdDgQWBBTCtTxGXv9iJjcmMNwkEfXJjsZnxjBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjI0NIYlaHR0cHM6Ly8yMDAuMTMwLjk5LjI0NC9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAlkkuY7JCZIN2wBHLZR1H1XD7D5veyCoS
Azx4m29UBhJ1uIvrTorRxIpArCIQFtJiTIcvw8fcRTizkuB+JDYzT5YOInRBOl06
o18iH25lPCIc8PHdUPzYjOeL8jlMa+YulCOmO5oEfIfVW1AdCu5b0E5pQflRRuC0
LE67zSvOZLna3RdaApJA8sBynLR0fIU1frMOwtUwO/FeoN77nepFb07GAry5ljBX
/HyVdfrBaE85vWDDOsekGmxzzxe/ZpQektNHFFZI6ZJ9TISd80ORm2GfxnzF6b3U
ACfptaPb+Gikr8JHVZNyhRGOHSU39Bys5lOCt8U4e57G0con2nX9wA==
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUfZkWjDOgU4/tYMZc+5dtgC4PQlQwDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDQwHhcNMTUxMDI3MDYyMzE5WhcN
MzUxMDI3MDYyMzE5WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjI0NDCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAKcPtrZheV8iBI6nzOY6G5TmxB0QNfAO
A5drEM9fFMv+i/BC0B1/FIenyW6dx7LzR9WQLbAn7AfBSc/LRrcO7urulu6GOxGq
jH5wDZuQ7bzfj37QyeMC97gKZO5z0geRdOouAc2yieNiCa7rvDHtc6h33xQVB/SU
GfJZoGyJei6ipy5cosHkRou4xc6ZhdQ6P3UjdLYUHFq0LcSD4MkgmiGZ9odrnbFo
QgHxP3+FT5URdfp7Pbk/Ucs79vxmfw9hvzgxzJf6QU8wy7H38ATYBaa0BOjJHr2j
eG5dlSwhlIQsSkYQ61R0cbObDHYl+7dRdHbrTN4le7xBbnnwyjU9HhkCAwEAAaNj
MGEwHQYDVR0OBBYEFJDxbVJYprs4+YfwreaKoJlI8zG8MEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMjQ0hiVodHRwczovLzIwMC4xMzAuOTkuMjQ0L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQAPsyh8aPqXEU4Sqweh56HCgkiScRyngwkO
7yUchoRxajhYN7LyxJhVWAxpabFTXZ9IsMVwpLW+ZoCSKG+cgUjMbaYl97U0JpeE
6t3SpcfniCE//1FOn/0kugWBoPt3F2qS8evsQw2HVLEeTFvXROWnWR/wSF6yPCyP
MdV+gb+eS/K+IC2XKVqYn9uQOHbUzAPzi/vkq7j2w+vThFoLFKkAMArE1sGdzebR
LHq9cmMD/ykorRpbeYGqg2CwK8ZXOE5dhiljGn5Zoy2fY8QTNwoVGZCIMNz6VrVM
4SPqP4Zlqt+j0mWkJ7eQUD9dOId5oc6F3tb+sFS35yueZ129EJ+m
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIULmI/SzJFmaBtTY4JUVp7vgmxxb8wDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDQwHhcNMTUxMDI3MDYyMzIwWhcN
MzUxMDI3MDYyMzIwWjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjI0NDCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAJeprOnMCfgJvTturlqIKDFtb53W9rdY
488O2AIGX2RNKkviYZphcjGMMb3itfKLYLslwoDU0YAHK6YZtRC/ir3UBn0kEtcO
pkDfCptxVXJuiTGb4VpeIYW8wsSojaaTAqJOP9Os89JX7y1+G2QcbuoNFwkKSwFf
YSCVf1kX15cRgcIFnnVOTAWc+dI8ex4A2I2O4xoxU82LIJHzZ+in27SinqQcIEiT
9bK53zqF3I1/P0d2tmScw4FAeFewYBauFUgb43My3wNPC4vg7Sm3LrF47FaPX3bk
0ZGUNZEZEwouAtC62NREkhw+tXDGR/OW4A9yiCmOEawWMxRycdzec4sCAwEAAaNj
MGEwHQYDVR0OBBYEFEBZa0bHL0/A9V6mGmBHvl0pYClNMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMjQ0hiVodHRwczovLzIwMC4xMzAuOTkuMjQ0L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQB0aW8DJPZzmsOxpY6f5z6mqo8k+WTE5/cb
Oi9E0SuSdCYPixPBBATN3VUHqb4LGTG7jXjAEjNXst+Egxcg7mC4/NSfJRRBPQwo
FD/EvGq08M6BXqJRL2Oh8eDKVyn77TjAe1GNuPPUvQNk5qJ61GgiuuSA6ukE0cdM
Kpo5ukzpdImvkgqGQF5s2oktWDRB3CjqhDny3bIcoXf2gVyNN1A0QedhziwQz/Q1
+uiOCBYKxS2iKUMVDw5fTL3obA04Rm2rs0W7nHk073FhNwi0z9lH5TFdgNZu2xZe
p7bfffyGTK1xVMNWKxn144A6TUAS8gnhWywIoPR3xGoZWEa08Vm4
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP4 PGID',
    ),
    'Description' =>
    array (
      'en' =>'Projeto do Programa de Gestao de Identidade',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP4 PGID',
  ),
);
$metadata['https://200.130.99.245/idp/shibboleth'] = array (
  'entityid' =>'https://200.130.99.245/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://200.130.99.245/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://200.130.99.245/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://200.130.99.245/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://200.130.99.245/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://200.130.99.245:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://200.130.99.245:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAK7+6EKnuJcIPRbumvdnvL77smGvMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjQ1MB4XDTE1MTAyNzA2MjQxN1oX
DTM1MTAyNzA2MjQxN1owGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDUwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCTQ0nqBU0CcYuUDYXHP23zhxZIwkO4
SA4mrifQqQuVgc1Wg0z+zzVX/elzvWjniX0N6+UvA+PdmwLMZD9XJ+g13KZXG/Tx
Xx+xXdgtB9d44sTwkMIhXj8BLLZn0A8U9tZGcnOGDghXX21jofAn4/ObJM5ASlYp
47sS2k7rPjX4nRUhff+eXHCWLzQMQ+hVNhWvqb0Yp6yMLKfQkW2jIncBSOUiOnz3
7Thq2a+vDunOhUj7Gc5Bgz3vZiCWW9SrUvKiSnkjX/6D2efa1zMQdgOcUdmNLMZA
h6QP49iHpYuXH1H1/RytMU3GlQyu5LdYAZUWtM1AUa/IGGwnoVZSxuuvAgMBAAGj
YzBhMB0GA1UdDgQWBBSD+PAB4YHqPfaffh9FxghioT/NqDBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjI0NYYlaHR0cHM6Ly8yMDAuMTMwLjk5LjI0NS9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAHSuuxNBTftQqm84ZOkpLwNWwZiBZWoHx
dTFHd3JgMpWfMHrhgvd3oCydxwKyShc0J6W1OLEs3wLFQxqHhCETVNbqQ5JgHs4H
95fVxL9bcFfN2K9C2LDgm2TxSDpD9f9B9wfYh3bx7OjVWDqb2nPb6ihfoLN1eNvx
QSjhqTyieJqQ/q0+5++52yKpg5o7fL9ci+uWEVK3UgX9Na4MHAqJVQ5uYOhA3k++
VjN+dAR+nvu9ruuQbLeJavF2yerrYyPB7g5cDv8hIdtk7oChBtDQUGgJFF3k0xnU
rxpyLNh3Pc2nN9nb0JgmnY0vseRxCXbMZ+9qjClxZaxXU6XgK4Td0w==
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUVo7bQtYzSsP5gWH95Ey09IkHz18wDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDUwHhcNMTUxMDI3MDYyNDE2WhcN
MzUxMDI3MDYyNDE2WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjI0NTCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAIa77Y66KKiSBFW29T2P0Yu4Kz0UgVkV
jU9lDnGOZsHRTXyXY60dt4+gZj4IxEPjhXPVQs9Q5zqgMUIWESAzYVXdThRzsFgV
F98onRQhVRKH1YId8d3HQ9Hq4u3okCo9sxP1NZEzk9gKSmuITq/45uFUDSWV+oMn
mno8pPOFHKMDRln9Gwpu93vzk5SxbKgugOvCOVuRr2CCtSatMCvEUAh9X/rlOARH
upNKXyHReCoe5e2YnL/uHzriSCoJVyG+bOYu6zOMAwZaPWevDk8KmCq9hy+PPLFc
/lL19cIRKYhQ34bDlrNaNHWzsnEknNWlZp12g8qgqt4WWSGwe7Okji0CAwEAAaNj
MGEwHQYDVR0OBBYEFNBRdcpc0iw0s1PD9hZ5XZUE2MZkMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMjQ1hiVodHRwczovLzIwMC4xMzAuOTkuMjQ1L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQBo9taWxKAFY13UgVJQdM1znsBkYNQzEHdw
2BxhYNqKVGZnT20bjKWzx8+FasHohAaBP6CKsIS9y0KxZrXh+ty2M0jtGn6NHWG/
1OwufUjXbqB11hRRpghEdkB2xyIGhNoVHR/O52XVVWWZX7Gz68Wc20PbetTzyD3H
0c+w0lK/o0BX8k23UeBRKcaCCF50e8yIB5p5YG2vm0ES6bSPaqlKR2i+tmUNw6J0
WbKKZ/qmICvI19sruey8ovu1YtwNCMt7fv5Rt7PtgmMV3R4Dt5RuBfMaMQy3aO0h
xHEErC9D7u5Si+O+VoCjk+a/Fhw4iv0aDROp7h2GUv+TwH9SgF7h
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAO/JfSJXsJXw/k5nNbMq65Wz0KPDMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjQ1MB4XDTE1MTAyNzA2MjQxN1oX
DTM1MTAyNzA2MjQxN1owGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDUwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC1JzG+muwG+LUm0XYguZH/XCaMJr7P
unJySB2IIUjse/gdW1TrmeKAO6pCeTQzQ6lYB5EddXim0K0KaPpbdee5GLFT0a3R
EcG+WAuH8HZGJXevfpPSz6EKV+QNsJ5Qh3rP50+Mqsym7vxgTxYAJicVZXM9dVOX
je+o+awbH1f3Y1HujlVcGK/al/rQaIWSGvo4qOWWlCLc+ANbsr8HdlhBJt7JgeLJ
mcuxzIskR3ZswJV2W4icrkHdvk0yr3JnJCWhY7bHcDZvkruRGQNsi5KE6ACyaSez
7YMk/GyfDf0AfA69dSiNOkTePjPqzq+2XZhT1Kni1M8M76v6HNX4szmjAgMBAAGj
YzBhMB0GA1UdDgQWBBSwINmMmZgflQWB38qOM1GaZOORzzBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjI0NYYlaHR0cHM6Ly8yMDAuMTMwLjk5LjI0NS9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAaqBYsjqvf3AgJ23miLB1R1kDLFzMWY2C
FuK4ETOZfZNtg5dTqGO7XB7IDT+I3wLt6CHEMCWZCRdT2dIpuDAV3oliNrtBXtDx
WiWJA9bCJ4R3eNsLUaI5vN2V5BbFxzCX4hb2oKwP8m94AyXF6Zm2dejmKT1RwsyG
Uf/MhPnLR1hkKAt7UsgKdq24onPq1yoGqRn9BryP+Z4lcK6iA+Jx2NUYL9FCdQ01
qZqvALQX7ORZiB1dwBFNHX4YffA39wN16oKwf7QsIra1CeTMUhDTo1nxymAN2z0x
KwPqffkjbUI8CaKXfwHeopHq6ZLE1jDVS2HGoItLlu5Awtb6C4q9vQ==
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP5 PGID',
    ),
    'Description' =>
    array (
      'en' =>'Projeto do Programa de Gestao de Identidade',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP5 PGID',
  ),
);
$metadata['https://200.130.99.246/idp/shibboleth'] = array (
  'entityid' =>'https://200.130.99.246/idp/shibboleth',
  'contacts' =>
  array (
  ),
  'metadata-set' =>'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' =>'https://200.130.99.246/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' =>'https://200.130.99.246/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' =>'https://200.130.99.246/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' =>'https://200.130.99.246/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' =>'https://200.130.99.246:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' =>1,
    ),
    1 =>
    array (
      'Binding' =>'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' =>'https://200.130.99.246:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' =>2,
    ),
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDJDCCAgygAwIBAgIVAIxHl8Xe7kt/JU8qqQZFhRH+HDvkMA0GCSqGSIb3DQEB
CwUAMBkxFzAVBgNVBAMMDjIwMC4xMzAuOTkuMjQ2MB4XDTE1MTAyNzA2MjUwNloX
DTM1MTAyNzA2MjUwNlowGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDYwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCYpaG8r/Cb/rBnYM11Ao2IuE9/svfO
IcpKik4gYQUMlzIx1dKvNLGsW/G76XagZOiQfLwZLIWVKsfcFV+M928zRsIHBLYl
NMSnEU/tgidETZz88/n4KnJabdt+uhjHKP4W7QOH57atVKe4s3BTxjx6XOqvZoZt
VXkAroZRYGEBjdF7/GlJmk47tQJFUv+vzBK9K6vva08Vh/qNxOdqrtrDMzMiBJt/
Q1yKjyUDfiyz6js9QZmXKiEu4dx3kxeCDLetUtL9gUmKwVqh7/LPPAplJbK4aCYY
aGLKCn000zq4F3VMqEUGG0HNRL6k91hoZyMuFEqa1KrbLOl4BgeCCuU1AgMBAAGj
YzBhMB0GA1UdDgQWBBRft25uESix/e5P7vsII75iqEOM/TBABgNVHREEOTA3gg4y
MDAuMTMwLjk5LjI0NoYlaHR0cHM6Ly8yMDAuMTMwLjk5LjI0Ni9pZHAvc2hpYmJv
bGV0aDANBgkqhkiG9w0BAQsFAAOCAQEAD3AHEKLG4cieZWWDJL4rTr7yPmTHIlqY
g3+33WrMGbOXOAcn7QilHZejWoSVuJKYSDt+SfHq2OTGN9Jvwh4cIuKhNUFNSSem
91rfnHlJ47VfHfVCuzOTRtrqAlMzqgYGKSWh4kcNMOm4qvyi7Z0wek8bay0vWn4x
//WSqAIvFMgNdGsBYhgabHex2AZao2sJOIhW06x6xqCZnAibQ7EdznRnpxb756j1
huQclpN/ZVCY3JdCcvp9UVS7YLWywP/m3pxk6Zej7sOl05gNT9wDMpxm7on4eEre
XhDNZogxphVOZ3CwOyFjgglt2xjYFHC+ko9Oh2om9RIvP+EjB0d6AQ==
                        ',
    ),
    1 =>
    array (
      'encryption' =>false,
      'signing' =>true,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUGaT/yoQ1FGD8T7bHud6zBKmqm1gwDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDYwHhcNMTUxMDI3MDYyNTA1WhcN
MzUxMDI3MDYyNTA1WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjI0NjCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAIOMYfE5rmBBqTc0i8YLdq5Cb3RyZWiX
oM5qy8cuKGdQ9qcf7k8tiAcPGNsNFLkuBRC7qoiKBOHd2vGo2+HHJKIYEHy/PqpL
jWuMtWycZgHinUhkc7p+O0GZiuoilgj/DtCBZHX2Yl2HNsYs9FhbWrptWHm0gEI7
h1c2XZWk/VIp1x/NiJwlaUgBtBZhsuXBFyYKKMgYVtDC3af4p691Qqmcbzn8hok0
2NzJckeYBzih19W+RqmhAAtmylluPBidZNqhLmudRtFxWhhWf/vBetnloniNzAjy
+dWOzlYpzatqJ35XY9u6UAFBELQemy5tLEuyl2ihvP6dLBbjcy2y6c0CAwEAAaNj
MGEwHQYDVR0OBBYEFFwowIJD3PEEr0JvxvxPkJAWXY9nMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMjQ2hiVodHRwczovLzIwMC4xMzAuOTkuMjQ2L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQAJ9E1pwt+wfw3toRDPF4l9jIi9Wzf2eX7y
QTxgWLo7c7do335rQKLqUsRwtZMovfR55qBtSQxPBgih+XbKhDNvDIOJyIHA6WVN
JJsbB2E28pTOXY7cMp2610AQVBI0zFY1r4y1sfKoOSWDnnIBuNgv2dezsqVqAKfA
4txFFaEMeBChe1/5ogQafOdDwwaoFKoyY6oMSqvHs37N/FP8L+DX4LrvR5eGFsBx
wN60g2niztR8kuJZM+TmNCIWOi7XyUjK4weRYoW7A4mEYD5Fq8g+5+qb7LHSqTlf
PIpFiiqQgUzEUikeEdwwt/Y/dmQD4kimhEIcLAiXB6xzvW3SMbuM
                        ',
    ),
    2 =>
    array (
      'encryption' =>true,
      'signing' =>false,
      'type' =>'X509Certificate',
      'X509Certificate' =>'
MIIDIzCCAgugAwIBAgIUblJn+aVu+MytFQppGyNfwExGWiAwDQYJKoZIhvcNAQEL
BQAwGTEXMBUGA1UEAwwOMjAwLjEzMC45OS4yNDYwHhcNMTUxMDI3MDYyNTA1WhcN
MzUxMDI3MDYyNTA1WjAZMRcwFQYDVQQDDA4yMDAuMTMwLjk5LjI0NjCCASIwDQYJ
KoZIhvcNAQEBBQADggEPADCCAQoCggEBAK2bMkp91C52vmN0NbzDJrRDkBz1M13z
vgk5ieefxHgWJi1tTE5aRpgEvp+Xd6aN5M/IF9wGrZc7/sG/wGUtV7derlAhzI3d
8DPE2R4odO8UX2oTfJQS05hguzBqxV0AYlQMG0pJJ8shpyy1oXNtADDKZP/KF9Rc
tJbjU08ceHtNMRGQy3vBXh81WuLEKvv0gFJnXejWu2LxZKmkiKp5y5EpJy/YvbWu
vBECn1e2MJRbwwDr80mAPDC5qX7ClPrhK891snyVd1BIge4FpEd3QtZ4fGHRtLVy
vH+xKkoQXKdQUhiQwZRd3lpgzU8WANcLQO/fZsDvNHfWXHzqg8yv8IUCAwEAAaNj
MGEwHQYDVR0OBBYEFNSjmWWOPJUlOz6PUVNLTOrKTYbHMEAGA1UdEQQ5MDeCDjIw
MC4xMzAuOTkuMjQ2hiVodHRwczovLzIwMC4xMzAuOTkuMjQ2L2lkcC9zaGliYm9s
ZXRoMA0GCSqGSIb3DQEBCwUAA4IBAQAqfzaS5/p/ivgoy6ppWpG3GdqEItfQ4W5x
GKAJOSNZUGkkImVLAGz4/N/RT6dFOnRqxAEzwcVAelN9ZuHCXthGzxBLS6ICyXr6
B0ZP7djpajm3EXNWFSBVj7HrfZAINlOGXMyspi5x3u46Q4NnPMJaggeXkzxj4nuv
6j5tpNYVg4eEnUW1yR93Enuogc8Fj7J1ajonNM9UsldFnThVplGr+hBEt5/jhrTh
vuduUsX4hiBp90Tgz/iqV6DhFSoUlxAsnURVvgLknJ8ODMZeDpvEhHx3LusNXWWr
wp3s28vVxUtdkgQlt4MkSfzozL7xRr+K5yEoHRpACYIZC+aj0gXS
                        ',
    ),
  ),
  'scope' =>
  array (
    0 =>'cafeexpresso.rnp.br',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' =>'IdP6 PGID',
    ),
    'Description' =>
    array (
      'en' =>'Projeto do Programa de Gestao de Identidade',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
  'name' =>
  array (
    'en' =>'IdP6 PGID',
  ),
);

?>

<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
//$metadata['https://openidp.feide.no'] = array(
//	'name' => array(
//		'en' => 'Feide OpenIdP - guest users',
//		'no' => 'Feide Gjestebrukere',
//	),
//	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',
//
//	'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
//	'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
//	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
//);


$metadata['https://sts.windows.net/de1e8318-c4bc-49b8-8963-e822fdc795c4/'] = array (
  'entityid' => 'https://sts.windows.net/de1e8318-c4bc-49b8-8963-e822fdc795c4/',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/de1e8318-c4bc-49b8-8963-e822fdc795c4/saml2',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.microsoftonline.com/de1e8318-c4bc-49b8-8963-e822fdc795c4/saml2',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/de1e8318-c4bc-49b8-8963-e822fdc795c4/saml2',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC4jCCAcqgAwIBAgIQQNXrmzhLN4VGlUXDYCRT3zANBgkqhkiG9w0BAQsFADAtMSswKQYDVQQDEyJhY2NvdW50cy5hY2Nlc3Njb250cm9sLndpbmRvd3MubmV0MB4XDTE0MTAyODAwMDAwMFoXDTE2MTAyNzAwMDAwMFowLTErMCkGA1UEAxMiYWNjb3VudHMuYWNjZXNzY29udHJvbC53aW5kb3dzLm5ldDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALyKs/uPhEf7zVizjfcr/ISGFe9+yUOqwpel38zgutvLHmFD39E2hpPdQhcXn4c4dt1fU5KvkbcDdVbP8+e4TvNpJMy/nEB2V92zCQ/hhBjilwhF1ETe1TMmVjALs0KFvbxW9ZN3EdUVvxFvz/gvG29nQhl4QWKj3x8opr89lmq14Z7T0mzOV8kub+cgsOU/1bsKqrIqN1fMKKFhjKaetctdjYTfGzVQ0AJAzzbtg0/Q1wdYNAnhSDafygEv6kNiquk0r0RyasUUevEXs2LY3vSgKsKseI8ZZlQEMtE9/k/iAG7JNcEbVg53YTurNTrPnXJOU88mf3TToX14HpYsS1ECAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAfolx45w0i8CdAUjjeAaYdhG9+NDHxop0UvNOqlGqYJexqPLuvX8iyUaYxNGzZxFgGI3GpKfmQP2JQWQ1E5JtY/n8iNLOKRMwqkuxSCKJxZJq4Sl/m/Yv7TS1P5LNgAj8QLCypxsWrTAmq2HSpkeSk4JBtsYxX6uhbGM/K1sEktKybVTHu22/7TmRqWTmOUy9wQvMjJb2IXdMGLG3hVntN/WWcs5w8vbt1i8Kk6o19W2MjZ95JaECKjBDYRlhG1KmSBtrsKsCBQoBzwH/rXfksTO9JoUYLXiW0IppB7DhNH4PJ5hZI91R8rR0H3/bKkLSuDaKLWSqMhozdhXsIIKvJQ==',
    ),
    1 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC4jCCAcqgAwIBAgIQfQ29fkGSsb1J8n2KueDFtDANBgkqhkiG9w0BAQsFADAtMSswKQYDVQQDEyJhY2NvdW50cy5hY2Nlc3Njb250cm9sLndpbmRvd3MubmV0MB4XDTE2MDQxNzAwMDAwMFoXDTE4MDQxNzAwMDAwMFowLTErMCkGA1UEAxMiYWNjb3VudHMuYWNjZXNzY29udHJvbC53aW5kb3dzLm5ldDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAL23Ba49fdxpus3qOXtv8ueCcePbCIEnL/tiTvp+jcTakGilZzJB3M/ktY9hX6RZ4KLcBjM2SClQmNUivEimTBX0U1N8L06GSE8H91tUKup/ofmm6qciU2qiHH4QNHepBADOTbEACoX78O363tUInJlPS1lVlGAGsi5okV+qN7ZLSauh+fKVM07cfw9A6a58es+bFvrojIqS1264GJjns+4baJCVYA4PMPsgxQsWTaOylbnlJC5MYTY2BpBn57dfLO2VtN+lqE5nWkJluAgoX/6OEyxOVchqWFpuyP/p1feQQb8Jc6JFVSs73in95eVFN3Oj5BsvgQdxPwoahZurD1sCAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAe5RxtMLU2i4/vN1YacncR3GkOlbRv82rll9cd5mtVmokAw7kwbFBFNo2vIVkun+n+VdJf+QRzmHGm3ABtKwz3DPr78y0qdVFA3h9P60hd3wqu2k5/Q8s9j1Kq3u9TIEoHlGJqNzjqO7khX6VcJ6BRLzoefBYavqoDSgJ3mkkYCNqTV2ZxDNks3obPg4yUkh5flULH14TqlFIOhXbsd775aPuMT+/tyqcc6xohU5NyYA63KtWG1BLDuF4LEF84oNPcY9i0n6IphEGgz20H7YcLRNjU55pDbWGdjE4X8ANb23kAc75RZn9EY4qYCiqeIAg3qEVKLnLUx0fNKMHmuedjg==',
    ),
  ),
);


<?php function m0(){if(strtoupper(substr(PHP_OS,0,3))===base64_decode('V0lO')){system(base64_decode('Y2xz'));}else{system(base64_decode('Y2xlYXI='));}}function h1($s2,$l3){return base64_decode('G1s=').$l3.base64_decode('bQ==').$s2.base64_decode('G1swbQ==');}$m4=base64_decode('MzI=');m0();$v5=[base64_decode('SG93IHRvIGdldCB5b3VyIFRHIElEOg=='),base64_decode('MS4gT3BlbiB0aGlzIGxpbms6IGh0dHBzOi8vdC5tZS9yYXdfZGF0YV9ib3QgaW4gVGVsZWdyYW0u'),base64_decode('Mi4gQ2xpY2sgb24gdGhlIFN0YXJ0IGJ1dHRvbi4='),base64_decode('My4gSW4gdGhlIHJlcGx5IG1lc3NhZ2UsIGZpbmQgdGhpcyB0ZXh0IGFuZCBjb3B5IGl0DQogICAgRXhhbXBsZSBQLlMuIFlvdXIgSUQ6IDUxNTE3KioqKioq')];foreach($v5 as $r6){echo h1($r6.base64_decode('Cg=='),$m4);usleep(500000);}$m7=base64_decode('dXNlcnMuanNvbg==');$n8=file_exists($m7)?json_decode(file_get_contents($m7),true):[];while(true){echo h1(base64_decode('ClBsZWFzZSBwcm92aWRlIHlvdXIgUC5TLiBJRCBlZzogNTE1MTcqKioqKio6IA=='),$m4);$k9=trim(fgets(STDIN));if(!is_numeric($k9)){echo h1(base64_decode('RXJyb3I6IE9ubHkgbnVtZXJpYyB2YWx1ZXMgYXJlIGFjY2VwdGVkIQo='),$m4);continue;}if(isset($n8[$k9])){echo h1(base64_decode('RXJyb3I6IElEIGFscmVhZHkgc2F2ZWQhCg=='),$m4);$la=$n8[$k9];echo h1("User ID: {$k9}\nSaved At: {$la[base64_decode('c2F2ZWRfYXQ=')]}\n",$m4);continue;}$n8[$k9]=[base64_decode('dGdfaWQ=')=>$k9,base64_decode('c2F2ZWRfYXQ=')=>date(base64_decode('WS1tLWQgSDppOnM='))];file_put_contents($m7,json_encode($n8,JSON_PRETTY_PRINT));echo h1(base64_decode('U3VjY2VzczogSUQgc2F2ZWQhCg=='),$m4);echo h1(base64_decode('RG8geW91IHdhbnQgdG8gc2F2ZSBtb3JlIGFjY291bnRzPyAoeS9uKTog'),$m4);$cb=strtolower(trim(fgets(STDIN)));if($cb!==base64_decode('eQ==')){break;}}echo h1(base64_decode('ClNhdmVkIElEczoK'),$m4);echo h1(json_encode($n8,JSON_PRETTY_PRINT).base64_decode('Cg=='),$m4);?>
<?php
/*
 Encode by www.phpen.cn 
*/
 function jsonError($code, $msg) { die(json_encode(array("\143\157\x64\145" => $code, "\x6d\163\x67" => $msg), 320 | JSON_PRETTY_PRINT)); } function json($code, $msg, $data) { die(json_encode(array("\x63\x6f\144\x65" => $code, "\x6d\163\147" => $msg, "\x64\141\164\x61" => $data), 320 | JSON_PRETTY_PRINT)); } function isAdmin() { goto nWk6B; c2QcK: lawyH: goto iEvUq; kMGo2: goto AktbZ; goto lcKLZ; JY7_R: xjJam: goto fanYL; fanYL: return true; goto c2QcK; DOKip: goto lawyH; goto JY7_R; an7fy: return true; goto S3MAb; nWk6B: session_start(); goto nMmLq; lcKLZ: zGk4o: goto an7fy; O7CzJ: return false; goto kMGo2; S3MAb: AktbZ: goto DOKip; BczMt: if ($_SESSION["\x6c\x6f\147\x69\x6e"] == "\141\144\155\151\156") { goto xjJam; } goto EKGch; nMmLq: $apikey = (include "\56\x2e\57\x43\x6f\162\x65\57\103\157\x6e\146\151\147\x2f\x61\160\x69\x6b\x65\171\x2e\160\150\160"); goto BczMt; EKGch: if ($_GET["\141\x70\151\153\145\171"] != '' && $_GET["\141\160\x69\153\x65\x79"] == $apikey) { goto zGk4o; } goto O7CzJ; iEvUq: } function clearAdmin() { goto pRFkj; jJtc2: if ($_SESSION["\x6c\x6f\x67\151\x6e"] == "\141\x64\x6d\151\x6e") { goto PN1RK; } goto TADmj; Ld9Jo: unset($_SESSION["\x6c\157\147\151\x6e"]); goto k8ehd; k8ehd: return true; goto W90IE; pRFkj: session_start(); goto jJtc2; cRR_z: PN1RK: goto Ld9Jo; TADmj: return false; goto Ydg__; W90IE: nwCFg: goto IEXKH; Ydg__: goto nwCFg; goto cRR_z; IEXKH: } function alert($msg, $url) { goto PpxZf; FFs7U: $alert .= "\x77\151\156\x64\157\x77\x2e\x6c\x6f\143\141\x74\x69\x6f\156\x2e\x68\x72\145\146\75\42" . $url . "\42\x3b"; goto wpcUR; Lo2nk: $alert .= "\x61\154\145\162\x74\50\x22" . $msg . "\x22\x29\x3b"; goto FFs7U; vvOen: die($alert); goto xWG9T; wpcUR: $alert .= "\74\57\x73\143\162\151\160\x74\76"; goto vvOen; PpxZf: $alert = "\74\x73\x63\162\151\160\164\76"; goto Lo2nk; xWG9T: } function jump($url) { header("\114\157\143\141\x74\x69\157\x6e\72\40" . $url); } function addAccess() { goto wMJbG; hz61g: $host = $_SERVER["\110\124\124\120\137\110\x4f\123\124"] . $_SERVER["\123\x43\x52\111\120\x54\x5f\116\101\115\x45"] . "\x3f" . $_SERVER["\121\125\105\122\131\137\x53\124\122\x49\116\107"]; goto rXA4Z; NACn4: $protocol = $_SERVER["\x53\x45\x52\126\x45\122\137\x50\122\x4f\x54\x4f\103\117\x4c"]; goto fwPy6; T0LQa: $ip = $_SERVER["\122\105\x4d\117\x54\x45\137\101\104\104\x52"]; goto C6GCc; WnY3a: RrLsz: goto m3VR2; fwPy6: $method = $_SERVER["\122\105\121\125\105\123\124\137\x4d\x45\x54\110\x4f\104"]; goto T0LQa; AvOP6: if ($result) { goto RrLsz; } goto ZKfXp; rXA4Z: $user_agent = $_SERVER["\x48\x54\124\120\x5f\125\x53\x45\122\x5f\x41\x47\x45\x4e\x54"]; goto NACn4; ZKfXp: return false; goto X3lqM; wMJbG: require "\56\x2f\103\157\x72\145\57\104\141\164\x61\x62\x61\x73\145\x2f\x63\x6f\x6e\x6e\x65\143\164\x2e\160\x68\160"; goto hz61g; C6GCc: $time = $_SERVER["\122\x45\x51\125\x45\x53\124\137\x54\111\115\x45"]; goto YFx7J; m3VR2: return true; goto bKZbu; X3lqM: goto imdbH; goto WnY3a; YFx7J: $result = $db->query("\x49\x4e\123\x45\122\124\40\111\x4e\x54\x4f\40\140\x6d\170\x67\141\x70\x69\x5f\141\x63\x63\x65\x73\x73\140\x28\140\x69\x64\x60\x2c\x20\140\150\157\x73\x74\140\54\40\140\165\x73\x65\x72\137\x61\x67\x65\x6e\164\x60\x2c\x20\140\x70\x72\x6f\164\x6f\143\x6f\x6c\x60\54\x20\140\x6d\x65\164\150\x6f\144\140\x2c\40\140\151\160\x60\54\x20\x60\x74\x69\155\x65\x60\x29\40\x56\101\x4c\x55\105\123\x20\50\116\x55\114\114\x2c\x27{$host}\x27\54\47{$user_agent}\x27\54\x27{$protocol}\x27\54\x27{$method}\47\x2c\47{$ip}\47\54\47{$time}\x27\51\x3b"); goto AvOP6; bKZbu: imdbH: goto PGU_d; PGU_d: } function checkEmail($email) { goto sZtTN; x9ipF: goto heC9Z; goto n42Hh; n42Hh: eCdmp: goto jeFXa; jeFXa: return true; goto eftGH; PqCSc: return false; goto x9ipF; eftGH: heC9Z: goto WxM9o; sZtTN: $result = trim($email); goto FMETp; FMETp: if (filter_var($result, FILTER_VALIDATE_EMAIL)) { goto eCdmp; } goto PqCSc; WxM9o: } use PHPMailer\PHPMailer\PHPMailer; use PHPMailer\PHPMailer\SMTP; use PHPMailer\PHPMailer\Exception; goto FI52Y; P2d4h: function is_spider() { goto If4Xn; hP3pS: if (!empty($agent)) { goto Fph_P; } goto o3kfe; swiDM: tNdyo: goto k_P8G; k_P8G: return false; goto TPzf5; TnfFa: goto GJDvO; goto aUgTX; XW_l1: $spiderSite = array("\124\145\x6e\x63\x65\156\x74\124\x72\x61\x76\145\154\x65\x72", "\102\141\x69\x64\165\x73\160\151\144\x65\162\x2b", "\x42\x61\151\x64\x75\107\141\155\145", "\x47\x6f\x6f\x67\x6c\x65\x62\157\164", "\x6d\x73\x6e\142\157\x74", "\123\x6f\x73\x6f\x73\x70\x69\x64\x65\x72\53", "\123\157\x67\x6f\x75\x20\x77\145\142\40\163\160\151\144\x65\x72", "\151\141\137\x61\162\143\x68\x69\x76\145\162", "\x59\x61\150\x6f\157\41\x20\x53\154\x75\162\160", "\131\157\165\x64\141\157\102\x6f\x74", "\131\141\150\x6f\x6f\x20\x53\154\x75\x72\160", "\115\x53\x4e\x42\157\164", "\x4a\x61\166\141\40\50\117\x66\164\x65\156\40\163\160\141\x6d\x20\142\157\x74\51", "\x42\x61\151\x44\165\123\x70\x69\144\x65\x72", "\126\157\x69\x6c\x61", "\x59\x61\x6e\144\145\170\40\142\x6f\164", "\x42\123\160\151\x64\x65\x72", "\164\167\151\143\x65\154\145\162", "\123\157\x67\x6f\165\40\123\x70\151\x64\x65\162", "\123\160\145\x65\144\x79\x20\x53\x70\x69\144\145\x72", "\x47\x6f\157\147\154\145\x20\x41\144\x53\x65\156\163\145", "\110\x65\x72\x69\164\x72\x69\170", "\x50\171\x74\150\x6f\x6e\55\x75\162\x6c\154\x69\x62", "\x41\x6c\x65\x78\x61\40\50\111\x41\40\101\x72\143\x68\151\x76\145\x72\51", "\x41\x73\x6b", "\105\170\141\x62\157\x74", "\x43\165\163\164\157", "\117\x75\164\x66\157\170\x42\x6f\164\x2f\131\x6f\x64\x61\157\x42\157\x74", "\171\x61\143\171", "\123\x75\x72\x76\145\x79\x42\157\x74", "\x6c\145\x67\x73", "\x6c\167\160\x2d\164\x72\x69\x76\151\141\154", "\116\165\164\x63\x68", "\123\164\x61\143\153\x52\141\x6d\142\x6c\145\162", "\x54\x68\x65\40\167\x65\x62\x20\141\x72\143\150\x69\166\x65\x20\50\x49\101\40\x41\162\x63\x68\x69\166\145\162\51", "\120\x65\x72\x6c\40\164\x6f\x6f\x6c", "\115\x4a\x31\62\x62\x6f\x74", "\x4e\x65\164\x63\162\x61\x66\x74", "\x4d\123\x49\105\x43\x72\x61\167\x6c\145\162", "\x57\x47\x65\164\x20\x74\x6f\157\x6c\x73", "\x6c\x61\162\x62\x69\x6e", "\x46\151\163\150\x20\x73\x65\x61\162\143\150"); goto q4Kkg; tM3qS: $agent = strtolower($_SERVER["\110\x54\124\x50\x5f\x55\123\x45\x52\x5f\101\107\x45\116\124"]); goto hP3pS; o3kfe: return false; goto TnfFa; q4Kkg: foreach ($spiderSite as $val) { goto SGhWv; oFem4: Hdnjx: goto f3ee2; SGhWv: $str = strtolower($val); goto lZWNr; vL5Ws: $sql = "\111\116\x53\105\122\124\40\111\x4e\124\x4f\40\x60\155\170\147\x61\x70\x69\x5f\x73\160\x69\x64\x65\x72\140\40\50\140\151\x64\140\54\x20\x60\141\147\x65\156\x74\140\x2c\40\140\151\160\x60\54\40\x60\x74\x69\x6d\145\x60\x29\x20\126\x41\x4c\125\105\123\x20\x28\116\x55\114\114\54\x20\x27{$str}\x27\x2c\x20\47" . getUserIp() . "\47\x2c\40\47" . time() . "\x27\x29\73"; goto e5cpl; KuZvM: if (!$result) { goto MEmDa; } goto mqHWo; zEdV5: MEmDa: goto BjTAD; K9GF5: hMs3c: goto oFem4; lZWNr: if (!(strpos($agent, $str) !== false)) { goto hMs3c; } goto vL5Ws; e5cpl: $result = $db->query($sql); goto KuZvM; mqHWo: return true; goto zEdV5; BjTAD: return false; goto K9GF5; f3ee2: } goto swiDM; aUgTX: Fph_P: goto XW_l1; TPzf5: GJDvO: goto NqQLu; If4Xn: require __CORE_DIR__ . "\57\104\141\164\141\x62\x61\x73\145\x2f\143\x6f\156\x6e\x65\x63\x74\x2e\160\150\160"; goto tM3qS; NqQLu: } goto Xq9BK; FI52Y: function sendMail($to, $title, $content) { goto dJDiF; ui84A: $result = $db->query($sql); goto G3w88; o83yD: $code = 0; goto AW6Ik; CVPzI: $mail->WordWrap = 50; goto tGCSf; Lcf6z: $code = -1; goto pKjuw; JTUv9: require "\x2e\56\x2f\x49\x6e\143\x6c\x75\144\x65\57\120\110\120\x4d\x61\x69\x6c\145\162\x2f\123\115\124\120\x2e\x70\150\x70"; goto gAltG; dJDiF: require "\x2e\56\57\103\x6f\x72\x65\57\104\x61\164\x61\x62\141\x73\x65\57\x63\x6f\156\x6e\145\143\x74\56\x70\150\x70"; goto zF3fR; M0yvc: goto d9DlB; goto D7SPS; DAYSI: $mail->CharSet = "\165\164\x66\x2d\x38"; goto MNv0C; zF3fR: require "\x2e\x2e\57\x49\156\143\154\x75\144\145\57\x50\110\x50\x4d\x61\x69\154\145\x72\x2f\105\x78\143\145\x70\x74\151\x6f\x6e\56\160\150\x70"; goto S9ppd; MNv0C: $mail->Subject = $title; goto fu2dH; RwDbv: oWcFj: goto jBSyB; GZye6: goto cYGFP; goto RwDbv; ZFwDC: $mail->setFrom($result["\163\x6d\x74\x70\137\x75\163\145\162\156\141\155\145"], $result["\164\151\x74\x6c\x65"]); goto iWtiw; AW6Ik: $msg = "\345\217\221\xe9\200\x81\346\x88\220\345\212\237"; goto M0yvc; D7SPS: qJL8Z: goto Lcf6z; jBSyB: $mail = new PHPMailer(); goto EfC1A; G3w88: if ($result = $result->fetch_assoc()) { goto oWcFj; } goto NceYw; PWgTm: $msg = "\350\216\xb7\345\217\x96\351\x82\256\xe4\xbb\xb6\351\x85\x8d\347\275\256\344\277\241\346\x81\257\xe6\x97\266\345\x8f\221\347\x94\x9f\351\x94\231\350\257\xaf"; goto GZye6; NceYw: $code = -1; goto PWgTm; iWtiw: $mail->addAddress($to); goto CVPzI; kJkgy: $mail->Username = $result["\x73\155\x74\x70\137\x75\163\145\162\x6e\x61\155\145"]; goto kWNpy; NiC0x: return $output; goto MGnMc; B2lER: $mail->SMTPAuth = true; goto wIAuu; wIAuu: $mail->Host = $result["\163\155\164\x70\137\150\x6f\163\164"]; goto kJkgy; S9ppd: require "\56\56\57\111\x6e\x63\x6c\x75\144\145\57\120\x48\120\115\x61\x69\x6c\145\x72\x2f\120\110\120\x4d\x61\151\x6c\x65\162\x2e\160\x68\160"; goto JTUv9; wBiEJ: $mail->SMTPSecure = $result["\x73\155\x74\160\137\x73\x65\x63\x75\162\145"]; goto JgxDz; fu2dH: $mail->Body = "\xa\x20\40\x20\x20\x20\40\40\x20\x9\x3c\x64\151\x76\x20\x73\x74\x79\x6c\145\75\x22\142\x61\143\153\x67\162\x6f\165\156\144\x2d\x63\157\154\x6f\x72\72\x23\64\64\70\101\x46\x46\73\143\157\x6c\157\162\72\x23\64\x34\x38\x41\106\x46\73\x70\141\144\144\151\x6e\147\x3a\x31\65\160\x78\73\42\76\12\40\40\40\40\x20\40\x20\x20\x9\11\x3c\160\40\x73\x74\171\154\x65\75\42\146\157\x6e\164\x2d\167\x65\151\x67\x68\x74\x3a\x62\x6f\x6c\144\x3b\x63\x6f\154\157\162\72\43\146\x66\x66\73\x66\x6f\x6e\x74\x2d\x73\x69\172\145\x3a\62\x30\160\x78\x3b\164\145\x78\x74\55\141\x6c\x69\x67\156\x3a\x63\145\x6e\164\145\162\73\42\x3e" . addslashes($result["\x74\x69\x74\154\x65"]) . "\74\57\x70\x3e\12\40\40\x20\x20\40\x20\40\x20\x9\x3c\x2f\x64\x69\166\76\12\40\x20\x20\40\40\x20\x20\40\x9\74\x64\151\x76\x20\163\164\x79\154\145\75\x22\x62\141\x63\x6b\x67\x72\x6f\x75\156\144\55\143\157\154\x6f\x72\x3a\43\x66\x66\x66\73\x70\x61\x64\144\x69\156\147\72\61\x30\160\x78\x3b\142\x6f\162\144\145\x72\x3a\x32\160\170\x20\x73\157\x6c\x69\x64\x20\43\64\64\x38\x41\106\x46\x3b\42\x3e\xa\x20\40\x20\x20\x20\40\40\40\x9\x9\74\160\40\163\164\171\154\145\x3d\42\143\157\154\157\162\x3a\43\60\x30\60\73\x66\157\156\164\55\x73\x69\172\x65\72\x31\65\160\170\73\x22\76" . $content . "\x3c\57\x70\76\12\40\40\40\40\x20\40\x20\40\11\11\74\x70\40\163\164\x79\x6c\145\x3d\42\x63\157\x6c\x6f\x72\x3a\43\60\x30\60\73\146\157\156\x74\x2d\163\151\x7a\145\x3a\x31\x35\160\170\73\164\x65\x78\x74\55\141\x6c\151\x67\156\x3a\x63\145\156\164\x65\x72\x3b\x22\x3e" . date("\x59\x2d\x6d\x2d\144") . "\46\x6e\142\163\160\73" . date("\x68\x3a\x69\72\x73") . "\x3c\x2f\160\x3e\12\x20\x20\40\x20\x20\40\40\40\11\74\57\144\151\166\x3e\xa\40\x20\x20\x20\40\x20\40\40"; goto zDHWx; EfC1A: $mail->isSMTP(); goto B2lER; gAltG: $sql = "\x53\105\114\x45\x43\x54\40\164\x69\x74\154\x65\x2c\163\155\164\x70\137\150\157\x73\164\54\x73\x6d\164\x70\x5f\165\x73\x65\162\156\141\155\x65\x2c\x73\155\164\160\137\x70\x61\x73\163\167\157\162\144\54\x73\155\x74\x70\x5f\160\x6f\162\x74\54\x73\155\x74\x70\137\163\x65\x63\x75\x72\145\x20\x46\122\x4f\x4d\x20\140\155\170\x67\141\x70\151\x5f\143\157\x6e\146\151\x67\x60\x3b"; goto ui84A; FCJxY: $output = json_encode(array("\x63\x6f\144\145" => $code, "\155\x73\x67" => $msg), 320); goto NiC0x; pKjuw: $msg = "\345\217\221\xe9\200\201\345\244\xb1\xe8\264\xa5\72\40" . $mail->ErrorInfo; goto OVE9i; OVE9i: d9DlB: goto PYV0N; zDHWx: if (!$mail->send()) { goto qJL8Z; } goto o83yD; PYV0N: cYGFP: goto FCJxY; tGCSf: $mail->IsHTML(true); goto DAYSI; JgxDz: $mail->Port = $result["\163\x6d\x74\160\137\160\x6f\162\x74"]; goto ZFwDC; kWNpy: $mail->Password = $result["\163\155\x74\x70\137\x70\x61\x73\163\x77\x6f\x72\144"]; goto wBiEJ; MGnMc: } goto uGuca; uGuca: function domainAuth($domain) { goto RzBz5; B99rq: uC8oK: goto uMjEH; P3YNw: return false; goto EoT2y; RzBz5: if (!$domain) { goto isYRm; } goto Upc8H; EqHDz: $data = json_decode($data, true); goto mgJfS; Upc8H: $url = "\x68\x74\164\x70\72\57\x2f\x61\165\164\150\x2e\155\x75\x78\x69\x75\x67\x65\x2e\143\x6e\x3a\x39\71\71\x2f\x61\160\151\x2f\x71\165\x65\162\x79\77\x73\145\170\x3d\x64\x6f\x6d\x61\x69\x6e\46\153\x65\171\x77\x6f\x72\144\75"; goto EY0r9; B1_rO: isYRm: goto EmFlz; EY0r9: $data = curl($url . $domain, "\x47\x45\x54", 0, 0); goto EqHDz; mgJfS: $code = $data["\143\157\144\x65"]; goto JhNV1; cseQ1: ULvNM: goto B1_rO; JhNV1: if ($code == 1) { goto uC8oK; } goto P3YNw; uMjEH: return true; goto cseQ1; EoT2y: goto ULvNM; goto B99rq; EmFlz: } goto FP435; FP435: function addApiAccess($id) { goto VUnOC; Y6Y2j: k9fG2: goto VVYyK; lpXHX: return true; goto Y6Y2j; o94ST: goto kZFD1; goto b_ilF; b_ilF: ECpp0: goto GfPyL; QfpXM: if ($update_result) { goto tzpQc; } goto fj1Wl; fj1Wl: return false; goto TCvxR; bnpVL: wAtxF: goto YYIVR; oES58: VGgcy: goto Kdwu8; G1rRj: if (intval($id)) { goto wAtxF; } goto l6ZH_; ppLfT: return false; goto o94ST; XzNFM: $update_result = $db->query("\x55\120\x44\x41\x54\x45\x20\x60\155\x78\147\x61\x70\151\x5f\141\160\x69\140\40\123\x45\x54\x20\x60\x61\x63\x63\145\163\x73\140\40\75\40\47{$update_access}\x27\x20\x57\x48\x45\122\105\40\x60\151\144\140\x20\75\x20\47{$id}\x27\73"); goto QfpXM; z31Wz: goto VGgcy; goto bnpVL; xv8YP: if ($get_access) { goto ECpp0; } goto ppLfT; GfPyL: $get_access = $get_access->fetch_assoc(); goto vQDSH; AOmWV: tzpQc: goto lpXHX; TCvxR: goto k9fG2; goto AOmWV; l6ZH_: return false; goto z31Wz; vQDSH: $update_access = $get_access["\141\x63\143\x65\x73\x73"] + 1; goto XzNFM; VVYyK: kZFD1: goto oES58; YYIVR: $get_access = $db->query("\123\105\x4c\x45\103\x54\x20\141\x63\x63\x65\x73\x73\x20\x46\x52\x4f\115\x20\140\x6d\x78\x67\x61\160\151\x5f\x61\160\x69\140\x20\127\110\105\x52\x45\40\x60\x69\x64\140\x20\x3d\40\47{$id}\x27\73"); goto xv8YP; VUnOC: require __CORE_DIR__ . "\x2f\x44\x61\x74\141\x62\141\163\145\57\x63\x6f\x6e\156\x65\x63\164\x2e\160\x68\160"; goto G1rRj; Kdwu8: } goto du2v7; du2v7: function getUserIp() { goto QVigO; TVUKE: if (empty($_SERVER["\110\x54\124\x50\x5f\x58\137\x46\x4f\122\x57\101\x52\x44\105\x44\137\106\x4f\122"])) { goto ZYfHM; } goto e_6pF; qDJjK: myLN4: goto TVUKE; LF0qB: BoU2r: goto YBb2j; mDo2j: jGVrg: goto XUrFE; H6SmX: if (empty($_SERVER["\x48\x54\x54\120\137\103\x4c\x49\105\x4e\124\x5f\x49\x50"])) { goto myLN4; } goto JHRjw; OoiBd: array_unshift($ips, $ip); goto S7M5x; kCydN: if (!$ip) { goto HSToX; } goto OoiBd; pzClY: return $ip ? $ip : $_SERVER["\x52\105\115\117\x54\105\137\x41\x44\x44\x52"]; goto RSJTI; JDncK: goto BoU2r; goto mDo2j; XUrFE: c9rZL: goto hXBlX; gEb1n: if (!($i < count($ips))) { goto BoU2r; } goto ADbHd; QuikW: V55JO: goto gEb1n; iZsQa: $i = 0; goto QuikW; S7M5x: $ip = FALSE; goto WW7TW; WW7TW: HSToX: goto iZsQa; JHRjw: $ip = $_SERVER["\x48\x54\x54\x50\x5f\103\x4c\111\105\x4e\x54\x5f\x49\120"]; goto qDJjK; hXBlX: $i++; goto kNsZH; ADbHd: if (mb_eregi("\x5e\x28\x31\x30\xe2\x94\202\61\x37\x32\x2e\x31\66\342\x94\202\61\x39\62\56\61\x36\70\51\x2e", $ips[$i])) { goto jGVrg; } goto ZJeM5; ZJeM5: $ip = $ips[$i]; goto JDncK; QVigO: $ip = false; goto H6SmX; YBb2j: ZYfHM: goto pzClY; e_6pF: $ips = explode("\x2c\x20", $_SERVER["\110\124\124\120\x5f\130\x5f\106\117\x52\x57\x41\122\104\x45\x44\137\106\x4f\x52"]); goto kCydN; kNsZH: goto V55JO; goto LF0qB; RSJTI: } goto P2d4h; Xq9BK: function curl($url, $method, $headers, $params) { goto sXEGo; vghbW: parse_str($headers, $headers); goto bP5ih; x9jJG: curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); goto h5dh5; hSKlu: curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); goto x9jJG; jx8fG: goto JR3Sz; goto ufTlj; bP5ih: JR3Sz: goto FPIEc; uL3OK: switch ($method) { case "\x47\x45\124": curl_setopt($ch, CURLOPT_HTTPGET, 1); goto P9EgL; case "\x50\x4f\x53\124": goto NTcb5; xPvWp: goto P9EgL; goto qSH0y; Ljn5D: curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString); goto xPvWp; NTcb5: curl_setopt($ch, CURLOPT_POST, 1); goto Ljn5D; qSH0y: case "\x50\125\124": goto nrwDt; CxvVl: goto P9EgL; goto BNmMg; MFi0Y: curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString); goto CxvVl; nrwDt: curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "\120\x55\x54"); goto MFi0Y; BNmMg: case "\x44\105\x4c\105\x54\105": goto Aeg2C; Aeg2C: curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "\104\105\114\x45\x54\105"); goto zUHcu; Lm_bH: goto P9EgL; goto adkfN; zUHcu: curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString); goto Lm_bH; adkfN: } goto xwKBD; mKyWu: $requestString = $params ?: ''; goto wOvNP; t6h8N: $headers = array("\103\x6f\x6e\x74\145\156\164\55\x74\171\x70\145\72\x20\164\145\170\164\57\152\x73\157\x6e"); goto jx8fG; wOvNP: goto oUT_E; goto ytATG; ApqaC: return $response; goto oxvgs; YAiAF: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto K_38B; rlWM_: if (!(stristr($response, "\x48\x54\124\120\40\64\x30\x34") || $response == '')) { goto A9J1C; } goto s2dGG; YGF35: $requestString = http_build_query($params); goto eByRy; wSTwb: P9EgL: goto EJH5N; EJH5N: $response = curl_exec($ch); goto YwbTb; xTX5V: if (!is_array($headers)) { goto yUKfk; } goto gO5f6; sXEGo: if (is_array($params)) { goto xFEV6; } goto mKyWu; qjYWs: XtwKe: goto t6h8N; eByRy: oUT_E: goto HlyPU; W1huH: A9J1C: goto ApqaC; ufTlj: yUKfk: goto vghbW; FPIEc: $ch = curl_init(); goto K3csL; ytATG: xFEV6: goto YGF35; h5dh5: curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); goto YAiAF; K3csL: curl_setopt($ch, CURLOPT_URL, $url); goto ornbK; ornbK: curl_setopt($ch, CURLOPT_VERBOSE, 1); goto hSKlu; YwbTb: curl_close($ch); goto rlWM_; xwKBD: ui1Q6: goto wSTwb; s2dGG: return array("\x45\162\x72\157\162" => "\xe8\257\xb7\xe6\261\x82\351\224\x99\350\xaf\xaf"); goto W1huH; gO5f6: goto JR3Sz; goto qjYWs; K_38B: curl_setopt($ch, CURLOPT_POST, 1); goto uL3OK; HlyPU: if (empty($headers)) { goto XtwKe; } goto xTX5V; oxvgs: }
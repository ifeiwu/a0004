<?php
//Copyright (c) 2016 iFeiwu.com
 class Uploader extends Ifeiwu { function __construct() { } protected function postImage($request_data) { goto hGkKI; LHb_T: $jpeg_quality = explode("\54", $_POST["\152\160\x65\x67\137\x71\x75\141\x6c\151\164\171"]); goto jDUKM; OVMVB: $_FILES["\146\x69\x6c\x65"]["\163\151\172\x65"] = $_POST["\x66\x69\x6c\145\137\x73\x69\x7a\145"]; goto LF5IZ; Mz8mU: HtGpr: goto DfNiM; znF2V: ExNIR: goto Ga9yZ; bFd31: if (!empty($_FILES["\x66\151\154\x65"])) { goto t3dtQ; } goto XabT8; dxU1h: return $this->success('', array("\160\141\164\x68" => $file_save_path, "\151\x6d\x61\x67\x65" => $handle->file_dst_name, "\x73\x69\x7a\145" => $handle->file_src_size, "\167\x69\x64\164\150" => $handle->image_src_x, "\150\x65\x69\x67\x68\x74" => $handle->image_src_y, "\x74\171\160\x65" => $handle->image_dst_type, "\x65\170\x74" => $handle->file_dst_name_ext)); goto Mz8mU; W4lno: $image_x = explode("\x2c", $_POST["\151\x6d\x61\x67\145\x5f\170"]); goto fw6Qi; UL19Z: $handle->Process($upload_root . "\57" . $file_save_path); goto H45lb; E_GQY: if (!($file_save_path == "\57")) { goto OS57m; } goto mlw8l; tE3tC: $handle = new Upload($_FILES["\146\151\x6c\x65"]); goto msxHc; XVOz8: dDtdh: goto FoOQP; u_ncs: M0lpT: goto w0eiV; DfNiM: MQpuL: goto LkQ9M; TDThb: $upload_root = "\x2e\x2e\x2f"; goto RVydG; TH_St: $quality = end($jpeg_quality); goto HrXPp; rwZdF: t3dtQ: goto liZpB; MXyrg: $file_name_body_pre = explode("\x2c", $_POST["\146\151\154\x65\137\156\x61\155\x65\x5f\x62\157\x64\x79\x5f\x70\x72\145"]); goto W4lno; RVydG: $file_new_name_body = $_POST["\146\x69\154\145\137\x6e\x65\x77\137\156\141\x6d\x65\137\142\157\x64\171"]; goto AyegX; mlw8l: $file_save_path = ''; goto IwVaD; H45lb: goto U9KeL; goto x1WND; MLP3h: goto HtGpr; goto jR4Qi; LF5IZ: $_FILES["\146\x69\x6c\145"]["\x65\162\x72\x6f\x72"] = $_POST["\x66\x69\x6c\145\137\145\162\x72\157\162"]; goto bFd31; xx1Jr: $handle->image_convert = $image_convert; goto XVOz8; HrXPp: if (!$quality) { goto fWVYu; } goto TQJR3; XabT8: return $this->error("\xe6\x97\240\346\225\x88\347\x9a\x84\xe6\226\x87\xe4\xbb\266\xe4\277\xa1\xe6\x81\257\xef\xbc\201"); goto wwgIT; Ga9yZ: $handle->file_overwrite = $file_overwrite ? true : false; goto UL19Z; p_TWV: $image_resize = $_POST["\151\155\x61\147\145\x5f\x72\145\163\x69\172\145"]; goto RmeOG; XnKMz: $_FILES["\x66\x69\x6c\145"]["\164\x79\160\x65"] = $_POST["\x66\151\154\145\137\164\x79\160\x65"]; goto OVMVB; d3USU: $image_convert = $_POST["\151\155\141\x67\x65\137\x63\x6f\x6e\166\145\x72\x74"]; goto LHb_T; eVV3W: U9KeL: goto u_ncs; nEZry: return $this->error($handle->log); goto MLP3h; TQJR3: $handle->jpeg_quality = $quality; goto uo1Mw; uo1Mw: fWVYu: goto xOkjS; wwgIT: goto MQpuL; goto rwZdF; w0eiV: if ($handle->processed) { goto trXWO; } goto nEZry; FoOQP: if (!$file_new_name_body) { goto ExNIR; } goto h99B0; fw6Qi: $image_y = explode("\x2c", $_POST["\x69\x6d\141\x67\x65\x5f\x79"]); goto fEcjs; xOkjS: if (!$image_convert) { goto dDtdh; } goto xx1Jr; RmeOG: $file_save_path = $_POST["\146\x69\x6c\145\x5f\x73\x61\166\145\x5f\160\141\x74\150"]; goto d3USU; fEcjs: foreach ($file_name_body_pre as $key => $prefix) { goto lfe17; Fui3e: $handle->jpeg_quality = $quality; goto MXIdX; lfe17: $width = $image_x[$key]; goto H3GYF; h8QxY: $handle->image_ratio_y = true; goto rdgvG; VyfV9: goto HQ88u; goto tMK1r; mXBh1: $handle->image_convert = $image_convert; goto SAViz; qvJjV: if (!$image_convert) { goto U1Hqx; } goto mXBh1; bedbZ: if (!$prefix) { goto uUrUd; } goto cEnA8; cEnA8: $handle->image_resize = $image_resize ? true : false; goto WZ06q; r06UA: $quality = $jpeg_quality[$key]; goto bedbZ; CSNLY: yFlbJ: goto K3fN1; HUrhi: if (!$quality) { goto GVQZ9; } goto Fui3e; Z1T2H: $handle->image_y = $height; goto wQmZX; HUBKo: uUrUd: goto HUrhi; Kc3_J: $handle->image_x = $width; goto ELerq; bpTtz: $handle->file_new_name_body = $file_new_name_body; goto I3yEb; WZ06q: $handle->file_name_body_pre = $prefix; goto HUBKo; dxMdM: if ($height && $handle->image_src_y > $height) { goto L1Gsi; } goto h8QxY; rdgvG: goto f2j4i; goto rEZYP; MXIdX: GVQZ9: goto qvJjV; u7ubt: $handle->Process($upload_root . "\x2f" . $file_save_path); goto CSNLY; cYZEK: if (!$file_new_name_body) { goto VQ6Bj; } goto bpTtz; SAViz: U1Hqx: goto QuPuH; ELerq: HQ88u: goto dxMdM; wQmZX: f2j4i: goto cYZEK; MrdHc: $handle->image_x = $handle->image_src_x; goto VyfV9; I3yEb: VQ6Bj: goto gNSzZ; gNSzZ: $handle->file_overwrite = $file_overwrite ? true : false; goto u7ubt; QuPuH: if ($width && $handle->image_src_x > $width) { goto dgMrn; } goto MrdHc; H3GYF: $height = $image_y[$key]; goto r06UA; tMK1r: dgMrn: goto Kc3_J; rEZYP: L1Gsi: goto Z1T2H; K3fN1: } goto k0z72; AyegX: $file_overwrite = $_POST["\x66\x69\154\145\x5f\157\166\x65\x72\167\x72\151\x74\145"]; goto p_TWV; k0z72: EF8y1: goto eVV3W; hGkKI: $_FILES["\x66\x69\154\145"]["\156\x61\155\x65"] = $_POST["\146\151\154\145\x5f\156\141\x6d\145"]; goto XnKMz; liZpB: ifeiwu\Loader::import("\145\x78\x74\x65\156\144\57\125\x70\154\157\x61\144"); goto tE3tC; IwVaD: OS57m: goto dxU1h; h99B0: $handle->file_new_name_body = $file_new_name_body; goto znF2V; jDUKM: if ($image_resize == 1) { goto Pcmw1; } goto TH_St; msxHc: if (!$handle->uploaded) { goto M0lpT; } goto TDThb; x1WND: Pcmw1: goto MXyrg; jR4Qi: trXWO: goto E_GQY; LkQ9M: } protected function postFile($request_data) { goto TjQj3; BnKNJ: W2xdC: goto bxNLG; U2FgT: $_FILES["\x66\x69\x6c\x65"]["\145\x72\x72\x6f\x72"] = $_POST["\146\x69\154\145\x5f\x65\162\162\157\162"]; goto w19aC; w19aC: $file = $_FILES["\x66\x69\154\x65"]; goto N2CJt; a5o8K: if (!move_uploaded_file($file["\x74\155\160\x5f\156\141\x6d\x65"], $dest_file)) { goto x9OmM; } goto WgBMV; Eru7N: goto W2xdC; goto m7Otx; kiJcJ: $_FILES["\146\x69\154\145"]["\163\x69\x7a\145"] = $_POST["\x66\151\x6c\145\137\x73\x69\x7a\x65"]; goto U2FgT; pxk3w: $resumableIdentifier = $_POST["\x72\x65\163\165\155\141\x62\154\145\x49\x64\x65\x6e\x74\x69\x66\x69\x65\162"]; goto FzQZw; WgBMV: $this->_createFileFromChunks($save_path, $temp_dir, $resumableFilename, $_POST["\x72\x65\x73\x75\155\x61\142\154\145\x43\x68\165\x6e\x6b\123\x69\x7a\145"], $_POST["\x72\x65\163\x75\155\x61\x62\154\x65\124\x6f\x74\141\154\123\151\x7a\145"]); goto Eru7N; TjQj3: $save_path = "\56\56\57" . $this->_UTF82GBK($_POST["\163\141\166\145\137\x70\x61\164\x68"]); goto xR8wb; m7Otx: x9OmM: goto Y1ll3; ELGPx: $_FILES["\x66\x69\x6c\145"]["\164\x79\x70\x65"] = $_POST["\146\x69\154\x65\137\x74\x79\x70\x65"]; goto kiJcJ; HyKX4: $this->_debug("\x65\162\x72\x6f\162\40" . $file["\x65\x72\162\x6f\162"] . "\40\151\156\x20\x66\151\x6c\145\x20" . $resumableFilename); goto xCSgr; FzQZw: $_FILES["\146\x69\x6c\x65"]["\156\x61\x6d\x65"] = $_POST["\146\151\x6c\145\137\x6e\x61\155\145"]; goto ELGPx; xR8wb: $resumableFilename = $this->_UTF82GBK($_POST["\x72\x65\x73\x75\x6d\141\x62\x6c\145\106\x69\x6c\145\156\141\155\145"]); goto hR54g; xCSgr: LYqkD: goto AEibC; Y1ll3: $this->_debug("\105\x72\162\157\x72\x20\163\141\x76\x69\156\147\40\x28\x6d\x6f\166\x65\x5f\x75\160\154\x6f\x61\144\145\144\x5f\x66\151\154\x65\51\40\x63\150\x75\x6e\153\x20" . $resumableChunkNumber . "\40\146\157\x72\40\146\151\x6c\145\x20" . $resumableFilename); goto BnKNJ; gXv0a: if (is_dir($temp_dir)) { goto jslQN; } goto CVAAp; CVAAp: mkdir($temp_dir, 511, true); goto KM789; N2CJt: if (!($file["\x65\x72\x72\157\x72"] != 0)) { goto LYqkD; } goto HyKX4; hR54g: $resumableChunkNumber = $_POST["\162\145\x73\x75\x6d\x61\x62\154\x65\103\150\x75\x6e\153\116\x75\x6d\x62\x65\x72"]; goto pxk3w; DYhtF: $dest_file = $temp_dir . "\57" . $resumableFilename . "\x2e\x70\x61\x72\x74" . $resumableChunkNumber; goto gXv0a; KM789: jslQN: goto a5o8K; AEibC: $temp_dir = $save_path . "\x2f" . $resumableIdentifier; goto DYhtF; bxNLG: } protected function getFile() { goto LeYOs; YX4f3: if (file_exists($chunk_file)) { goto P9WU2; } goto nPGpe; RcHiH: $chunk_file = $temp_dir . "\57" . $resumableFilename . "\56\160\x61\162\164" . $resumableChunkNumber; goto YX4f3; nPGpe: return 404; goto ViCih; kGpNs: IxhLY: goto uK3mX; LeYOs: $save_path = "\56\56\x2f" . $this->_UTF82GBK($_GET["\163\x61\x76\145\137\160\141\x74\150"]); goto F9nP3; F9nP3: $resumableFilename = $this->_UTF82GBK($_GET["\162\145\x73\165\155\141\x62\x6c\145\x46\x69\x6c\x65\x6e\x61\x6d\145"]); goto fZ6qF; aj2o6: $temp_dir = $save_path . "\x2f" . $resumableIdentifier; goto RcHiH; fZ6qF: $resumableChunkNumber = $_GET["\x72\145\x73\x75\155\x61\x62\154\x65\103\x68\165\156\153\116\165\x6d\x62\145\162"]; goto u_d3f; ViCih: goto IxhLY; goto VFI0A; u_d3f: $resumableIdentifier = $_GET["\162\145\x73\165\155\x61\142\154\x65\x49\x64\x65\x6e\164\x69\x66\x69\x65\x72"]; goto aj2o6; VFI0A: P9WU2: goto ndHBE; ndHBE: return 202; goto kGpNs; uK3mX: } private function _createFileFromChunks($save_path, $temp_dir, $fileName, $chunkSize, $totalSize) { goto e7LMu; AAh0L: $this->_rrmdir($temp_dir); goto exIFo; KOV_L: if (!($total_files * $chunkSize >= $totalSize - $chunkSize + 1)) { goto EGTJl; } goto gv253; z7bVZ: GKkEp: goto kyMPK; Dj1EE: NeBhT: goto Qi5_K; kyMPK: if (!($i <= $total_files)) { goto NeBhT; } goto gAuVC; rI9fR: ENdjR: goto t0Bv2; DKmlL: ZgnNA: goto IhGwe; WkbXu: goto GKkEp; goto Dj1EE; FmvmY: $this->_debug("\143\x61\x6e\x6e\x6f\x74\x20\143\x72\145\141\x74\x65\x20\x74\x68\145\x20\x64\145\163\x74\x69\156\x61\x74\151\x6f\156\x20\x66\151\x6c\145"); goto PTILs; bFs2Y: goto ZgnNA; goto Lw94S; T3zXc: foreach (scandir($temp_dir) as $file) { goto ZdxND; AKSaX: u8z6b: goto LxW9K; jTREp: $total_files++; goto TbT32; TbT32: CG17_: goto AKSaX; ZdxND: if (!(stripos($file, $fileName) !== false)) { goto CG17_; } goto jTREp; LxW9K: } goto uwjpF; gAuVC: fwrite($fp, file_get_contents($temp_dir . "\x2f" . $fileName . "\56\160\141\162\164" . $i)); goto r45gR; exIFo: goto fbX01; goto rI9fR; Lw94S: k4tbA: goto jZmqe; PTILs: return false; goto bFs2Y; r45gR: hUM_W: goto f1Vm8; Qi5_K: fclose($fp); goto DKmlL; uwjpF: wgpEy: goto KOV_L; e7LMu: $total_files = 0; goto T3zXc; f1Vm8: $i++; goto WkbXu; gv253: if (($fp = fopen($save_path . "\57" . $fileName, "\x77")) !== false) { goto k4tbA; } goto FmvmY; jZmqe: $i = 1; goto z7bVZ; IhGwe: if (rename($temp_dir, $temp_dir . "\x5f\x55\116\125\x53\x45\x44")) { goto ENdjR; } goto AAh0L; RLnOy: EGTJl: goto U8zXP; mrSkL: fbX01: goto RLnOy; t0Bv2: $this->_rrmdir($temp_dir . "\x5f\x55\116\x55\x53\105\104"); goto mrSkL; U8zXP: } private function _rrmdir($dir) { goto Lh3fY; P8XEL: NfYLj: goto BACxN; w8EfG: reset($objects); goto uGvyH; nrb7G: NGEt4: goto w8EfG; aW2Jt: $objects = scandir($dir); goto BGeDs; uGvyH: rmdir($dir); goto P8XEL; Lh3fY: if (!is_dir($dir)) { goto NfYLj; } goto aW2Jt; BGeDs: foreach ($objects as $object) { goto T5z4L; w69ZE: $this->_rrmdir($dir . "\57" . $object); goto KcHgt; y0_YO: unlink($dir . "\57" . $object); goto M2d_q; KcHgt: p1nww: goto mFCkT; M2d_q: goto p1nww; goto nWDKK; T5z4L: if (!($object != "\x2e" && $object != "\56\x2e")) { goto DHnIn; } goto Qwhcq; Qwhcq: if (filetype($dir . "\57" . $object) == "\144\151\x72") { goto my5MX; } goto y0_YO; mFCkT: DHnIn: goto adK3B; adK3B: t_Ygs: goto O4OUU; nWDKK: my5MX: goto w69ZE; O4OUU: } goto nrb7G; BACxN: } }
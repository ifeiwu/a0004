<?php
//Copyright (c) 2016 iFeiwu.com
 class Log extends Item { function __construct() { $this->table = "\x6c\x6f\147"; parent::__construct(); } protected function callbackPageAfter(&$data) { $data["\x6c\151\x73\x74"] = $this->_getData($data["\x6c\151\163\x74"]); } protected function getLately() { $list = $this->db->select($this->table)->where("\160\x69\144\x20\75\40\x30")->order("\x63\x74\x69\155\145\40\x44\x45\123\103")->limit(4)->all(); return $this->success($this->_getData($list)); } protected function postDelete($request_data) { goto qYXzU; gHAo3: foreach ($ids as $id) { goto cBAhd; iyfpq: $error[] = $id; goto pc_S1; pc_S1: upD2r: goto Hg_6m; Hg_6m: Wg8Gi: goto lcEo2; cBAhd: if (!$this->db->delete($this->table, array("\151\x64", "\x3d", $id))->is()) { goto upD2r; } goto iyfpq; lcEo2: } goto grloj; HZXh6: $ids = $request_data["\x69\144"]; goto gHAo3; Qo4Oo: goto cBvVZ; goto kXtuW; kXtuW: kupBQ: goto GnBBk; GnBBk: return $this->success(); goto jndFV; i4lJU: return $this->error(); goto Qo4Oo; qYXzU: $error = array(); goto HZXh6; OpTrb: if (count($error) === 0) { goto kupBQ; } goto i4lJU; jndFV: cBvVZ: goto Z2Fnc; grloj: rGuJU: goto OpTrb; Z2Fnc: } private function _getData($data) { goto jxBs1; c4VeJ: QaHf0: goto MLqWg; jxBs1: foreach ($data as $key => $value) { goto rSBFo; rSBFo: $type = $value["\x74\x79\x70\145"]; goto WrRl9; b9kyN: xJ1Bw: goto z9IdI; tvqi4: switch ($type) { case "\154\157\x67\x69\x6e": goto Thg_Z; A0LsU: $data[$key]["\x74\151\164\x6c\145"] = "\347\231\273\xe5\x85\245\xe7\xbd\x91\xe7\253\231\xe5\x90\216\xe5\217\260"; goto O_xo3; O_xo3: goto xJ1Bw; goto RtfpV; Thg_Z: $data[$key]["\151\x63\x6f\x6e"] = "\x61\x63\143\x6f\165\x6e\x74"; goto A0LsU; RtfpV: case "\141\144\144": goto QqB2_; QqB2_: $data[$key]["\x69\x63\157\156"] = "\160\154\165\x73"; goto dY2l1; zL2x1: goto xJ1Bw; goto ap6qs; dY2l1: $data[$key]["\x74\x69\164\154\145"] = "\346\xb7\273\xe5\212\xa0\xe6\x95\260\346\215\xae\x3a\46\x6e\x62\x73\x70\73\x3c\141\40\x68\x72\x65\x66\x3d\42" . ($url . "\46\x69\144\x3d" . $value["\x74\141\142\154\x65\x5f\x69\x64"]) . "\42\76" . $title . "\74\x2f\141\76"; goto zL2x1; ap6qs: case "\165\160\x64\141\x74\x65": goto Tjsfg; Tjsfg: $data[$key]["\151\x63\x6f\156"] = "\x70\145\x6e\143\151\154"; goto ArRG5; PZgV_: goto xJ1Bw; goto KcMzL; ArRG5: $data[$key]["\164\x69\x74\x6c\145"] = "\xe6\233\xb4\xe6\x96\xb0\346\225\260\xe6\x8d\256\72\x26\x6e\142\x73\160\73\74\x61\x20\x68\162\x65\146\x3d\x22" . $url . "\x22\x3e" . $title . "\x3c\57\x61\76"; goto PZgV_; KcMzL: case "\x72\x65\x6d\x6f\166\x65": goto ttGO1; AJoMM: $data[$key]["\164\151\x74\154\x65"] = "\xe7\xa7\xbb\351\x99\xa4\x26\x6e\142\x73\x70\x3b\74\x61\x20\150\162\x65\146\75\42" . $url . "\42\x3e" . $title . "\x3c\57\x61\76\46\x6e\142\163\x70\x3b\346\x9d\xa1\xe6\x95\260\xe6\x8d\xae\xe5\210\xb0\345\233\x9e\346\224\xb6\347\253\231"; goto ByNST; ByNST: goto xJ1Bw; goto G07om; ttGO1: $data[$key]["\x69\143\157\x6e"] = "\144\145\154\x65\x74\145\55\x66\x6f\162\x65\x76\x65\162"; goto AJoMM; G07om: case "\x72\x65\x70\154\171": goto NRR7u; NRR7u: $data[$key]["\x69\x63\x6f\x6e"] = "\x72\145\160\x6c\171"; goto VLbHi; VLbHi: $data[$key]["\x74\151\x74\154\x65"] = "\xe4\273\216\xe5\233\x9e\346\224\xb6\xe7\xab\x99\xe6\201\242\345\244\215\46\156\142\x73\160\x3b\x3c\141\x20\x68\x72\145\146\75\42" . $url . "\42\76" . $title . "\74\57\141\76\x26\x6e\142\163\160\x3b\xe6\x9d\xa1\346\x95\260\xe6\215\256"; goto KxG7h; KxG7h: goto xJ1Bw; goto nJQdu; nJQdu: case "\x64\x65\x6c\x65\164\x65": $data[$key]["\151\143\157\x6e"] = "\x64\x65\x6c\x65\x74\x65\x2d\166\x61\162\x69\x61\x6e\x74"; $data[$key]["\x74\x69\164\154\x65"] = "\xe5\275\xbb\345\xba\x95\345\210\240\351\x99\xa4\x26\156\142\x73\160\x3b\x3c\x61\40\x68\x72\145\x66\75\42" . $url . "\42\x3e" . $title . "\x3c\x2f\x61\x3e\x26\x6e\x62\x73\x70\x3b\xe6\x9d\xa1\xe6\225\xb0\xe6\x8d\xae"; default: goto xJ1Bw; } goto ZCM5E; DTaGX: $url = $value["\x75\x72\154"]; goto tvqi4; z9IdI: giPzg: goto HN5vW; ZCM5E: phajg: goto b9kyN; WrRl9: $title = $value["\x74\x69\164\x6c\x65"]; goto DTaGX; HN5vW: } goto c4VeJ; MLqWg: return $data; goto aSL9d; aSL9d: } }
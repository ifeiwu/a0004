<?php
//Copyright (c) 2016 iFeiwu.com
 class Stats extends Item { function __construct() { $this->table = "\x73\x74\141\164\x73"; parent::__construct(); } protected function getDays() { goto XC4eM; Abj3i: HDPPD: goto VCtrw; VCtrw: $i++; goto L9D8K; WjjO9: if (!($i <= 1)) { goto RozpM; } goto OPajZ; L9D8K: goto KaRyx; goto PjTBu; rfdgs: $data["\155\157\x6e\x74\150\x73"][] = array("\155\157\x6e\x74\x68" => $month, "\165\x76" => $this->_getMonthsCount($table, $i, "\x63\x6f\157\x6b\x69\145"), "\160\166" => $this->_getMonthsCount($table, $i, "\151\x64"), "\x69\x70" => $this->_getMonthsCount($table, $i, "\151\x70")); goto Abj3i; f8Ol5: return $this->success($data); goto l1mFA; ZaQ9G: KaRyx: goto WjjO9; dTrwE: $data["\x64\141\x79\x73"][$i . "\346\x97\xa5"] = array("\x75\x76" => $this->_getDaysCount($table, $day, "\143\x6f\157\x6b\x69\145"), "\x70\x76" => $this->_getDaysCount($table, $day, "\x69\144"), "\x69\160" => $this->_getDaysCount($table, $day, "\151\160")); goto AepE7; GOWJp: $i = 1; goto TKJKF; TKJKF: WoVfb: goto NrhH0; bJUYb: $day = $days - $i; goto dTrwE; XWqO2: $month = date("\x6d"); goto i93O7; GFOGl: goto WoVfb; goto zMz5j; XC4eM: $data = array("\x79\145\x61\162\163" => array(), "\155\157\156\164\150\163" => array(), "\x64\x61\171\163" => array()); goto VWGZI; i93O7: $i = 0; goto ZaQ9G; OPajZ: $month = $month - $i; goto rfdgs; LmVAQ: $i++; goto GFOGl; AepE7: ajym1: goto LmVAQ; NOLmb: $days = date("\152"); goto GOWJp; NrhH0: if (!($i <= $days)) { goto mKC_6; } goto bJUYb; vgBKn: $data["\171\145\x61\x72\x73"][] = array("\171\145\141\x72" => date("\x59"), "\165\x76" => $this->_getYearsCount($table, 0, "\x63\157\157\153\x69\145"), "\160\166" => $this->_getYearsCount($table, 0, "\x69\144"), "\151\160" => $this->_getYearsCount($table, 0, "\151\160")); goto f8Ol5; zMz5j: mKC_6: goto XWqO2; VWGZI: $table = $this->prefix . $this->table; goto NOLmb; PjTBu: RozpM: goto vgBKn; l1mFA: } private function _getDaysCount($table, $day, $group) { goto KHScx; tVN71: return $this->db->query("\x53\x45\x4c\105\x43\124\x20\103\x4f\125\116\x54\50\x74\x2e\x6e\x75\x6d\x29\x20\106\122\x4f\115\x20\x28\123\105\114\105\x43\124\x20\103\x4f\x55\x4e\x54\50\52\x29\x20\156\165\155\x20\x46\x52\x4f\x4d\40{$table}\40\x57\x48\x45\x52\x45\40\144\141\x74\145\137\146\157\162\155\x61\164\x28\x64\x61\x74\x65\54\47\45\x59\x2d\45\x6d\x2d\x25\x64\47\51\40\75\x20\144\141\164\x65\x5f\146\157\x72\155\x61\164\50\123\125\x42\x44\101\x54\105\x28\156\157\x77\x28\51\x2c\x69\x6e\164\145\162\166\141\x6c\40{$day}\40\144\x61\171\51\54\47\x25\131\x2d\45\x6d\55\x25\144\47\51\x20\x47\122\117\125\x50\40\x42\x59\x20\140{$group}\x60\x29\x20\164")->get(0); goto qeR3l; f8O3m: M2xwj: goto tVN71; kRrZ0: goto PmDyr; goto f8O3m; qeR3l: PmDyr: goto ikXeD; kOpOV: return $this->db->query("\x53\x45\114\x45\103\124\40\103\117\125\x4e\124\x28\x2a\x29\40\x6e\x75\x6d\40\x46\122\x4f\115\x20{$table}\40\x57\x48\x45\x52\x45\40\144\141\x74\x65\137\x66\157\x72\x6d\141\x74\x28\144\x61\164\145\54\47\x25\131\x2d\x25\x6d\55\x25\144\47\51\40\x3d\x20\x64\x61\164\x65\137\x66\157\162\155\x61\x74\50\123\x55\102\104\x41\124\105\50\156\x6f\x77\50\51\x2c\x69\156\164\145\162\x76\141\x6c\x20{$day}\40\x64\141\x79\51\x2c\47\45\131\55\45\155\x2d\x25\144\47\x29")->get(0); goto kRrZ0; KHScx: if ($group != "\x69\x64") { goto M2xwj; } goto kOpOV; ikXeD: } private function _getMonthsCount($table, $month, $group) { goto H5442; cDW69: goto VWujm; goto OIlC1; OIlC1: iasd4: goto zkg53; zkg53: return $this->db->query("\123\105\x4c\105\103\124\x20\103\x4f\125\116\124\50\164\56\x6e\x75\x6d\51\40\x46\x52\x4f\115\x20\x28\123\105\x4c\x45\103\x54\40\103\x4f\x55\x4e\x54\50\52\51\40\156\165\155\x20\106\122\117\115\40{$table}\x20\x57\110\x45\x52\105\x20\144\x61\x74\x65\137\146\157\x72\155\141\x74\50\144\x61\x74\x65\54\47\x25\x59\55\45\x6d\47\x29\40\75\40\144\141\164\x65\137\146\x6f\x72\x6d\141\164\x28\123\125\x42\104\x41\x54\x45\x28\156\157\x77\50\51\54\151\156\164\145\x72\166\141\x6c\40{$month}\40\x6d\x6f\156\x74\150\51\x2c\47\x25\x59\x2d\45\155\x27\51\x20\x47\122\x4f\125\x50\40\x42\x59\40\140{$group}\140\51\x20\x74")->get(0); goto CO9g5; H5442: if ($group != "\x69\x64") { goto iasd4; } goto Qow2c; Qow2c: return $this->db->query("\x53\105\114\x45\x43\x54\x20\x43\117\125\x4e\x54\x28\52\51\40\x6e\x75\155\x20\x46\122\x4f\115\40{$table}\40\127\x48\105\122\x45\40\x64\x61\164\145\x5f\x66\157\x72\x6d\x61\x74\50\144\x61\164\145\54\47\45\131\55\45\x6d\x27\51\x20\75\x20\144\141\164\145\x5f\146\x6f\x72\x6d\x61\164\x28\x53\125\102\104\101\x54\x45\x28\x6e\x6f\x77\x28\51\x2c\x69\x6e\x74\x65\162\x76\x61\x6c\x20{$month}\x20\x6d\x6f\156\x74\150\51\x2c\x27\x25\x59\x2d\x25\x6d\x27\51")->get(0); goto cDW69; CO9g5: VWujm: goto n3fj1; n3fj1: } private function _getYearsCount($table, $year, $group) { goto hV3Sg; jbO2s: FqAJC: goto UDUs_; hV3Sg: if ($group != "\151\144") { goto pvQ1e; } goto FyDTe; lLoOJ: return $this->db->query("\123\x45\114\105\103\x54\40\x43\x4f\x55\116\x54\50\164\x2e\x6e\x75\x6d\x29\40\x46\x52\x4f\115\x20\50\x53\105\114\x45\x43\x54\40\x43\x4f\125\116\124\x28\52\x29\x20\156\x75\155\x20\106\122\117\115\40{$table}\x20\127\110\x45\122\105\40\144\141\164\x65\137\x66\157\162\155\x61\x74\50\144\x61\164\x65\x2c\47\x25\131\x27\51\x20\75\x20\144\141\164\145\137\x66\x6f\x72\x6d\141\x74\50\123\125\102\x44\x41\x54\105\50\156\x6f\x77\x28\x29\54\x69\156\x74\x65\x72\166\141\154\40{$year}\40\171\x65\x61\162\x29\x2c\47\45\131\47\x29\40\x47\x52\117\x55\120\x20\102\x59\40\x60{$group}\x60\51\x20\x74")->get(0); goto jbO2s; jLML2: goto FqAJC; goto kwQjO; FyDTe: return $this->db->query("\123\105\114\105\x43\124\x20\103\117\x55\x4e\x54\x28\x2a\51\x20\x6e\x75\x6d\40\x46\122\117\115\x20{$table}\40\x57\110\105\122\105\40\144\141\164\x65\x5f\146\157\x72\x6d\141\164\x28\144\141\164\145\54\x27\45\131\47\x29\x20\x3d\x20\144\x61\164\145\137\x66\157\162\x6d\x61\x74\x28\x53\125\x42\x44\x41\124\105\x28\x6e\x6f\x77\50\x29\54\151\156\x74\145\x72\166\141\154\40{$year}\x20\x79\145\x61\162\x29\x2c\x27\x25\x59\47\x29")->get(0); goto jLML2; kwQjO: pvQ1e: goto lLoOJ; UDUs_: } }
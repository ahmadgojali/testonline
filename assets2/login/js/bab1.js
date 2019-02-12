// Future Value
	function hitungFV() {
		var MASKApo = document.getElementById("fv1").value;
		var MASKAi= document.getElementById("fv2").value;
		var MASKAn= document.getElementById("fv3").value;
						
		var Apo = MASKApo.split(',').join('');
		var Ai = MASKAi.split(',').join('');
		var An = MASKAn.split(',').join('');

		var Aip = Ai / 100;
		var Afv = Apo * Math.pow(1+Aip,An);
		var Arfv = Math.round(Afv);

		document.getElementById("outputFV").innerHTML = 
		"Nilai Majemuk uang yang akan datang (FV) : \n"+
		"		= Po / ( 1 + i )^n \n"+
		"		= Rp. "+ MASKApo +" x ( 1 + "+ Aip +" )^"+ MASKAn +"\n"+
		"		= "+ uang(Arfv, "Rp.");
	}
	function resetOutputFV(){
		document.getElementById("outputFV").innerHTML = "";
	}
// ---------------------------------------------------------------------------- >
// Future Value Annuity
	function hitungFVA() {
		var MASKBr = document.getElementById("fva1").value;
		var MASKBi = document.getElementById("fva2").value;
		var MASKBn = document.getElementById("fva3").value;

		var Br = MASKBr.split(',').join('');
		var Bi = MASKBi.split(',').join('');
		var Bn = MASKBn.split(',').join('');

		var Bip = Bi / 100;
		var Bpengalifv = ( (Math.pow(1+Bip,Bn)) - 1 ) / Bip;
		var Bfva = Math.round(Br * Bpengalifv);
		document.getElementById("outputFVA").innerHTML = 
		"Faktor Pengali FVanuitas : \n"+
		"		= ( ( 1 + i )^n - 1 ) / i \n"+
		"		= ( (1 + "+ Bip +")^"+ Bn +" - 1 ) / "+ Bip +" \n"+
		"		= "+ Bpengalifv.toFixed(4) +" \n"+
		"Future Value Anuitas : \n"+
		"		= R x Faktor Pengali Fvanuitas \n"+
		"		= Rp. "+ MASKBr +" x "+ Bpengalifv.toFixed(4) +" \n"+
		"		= "+ uang(Bfva, "Rp.");
		}
		function resetOutputFVA(){
			document.getElementById("outputFVA").innerHTML = "";
		}
// ---------------------------------------------------------------------------- >
// Future Metode Bunga Sederhana
	function hitungMBS() {
		var MASKCp = document.getElementById("mbs1").value;
		var MASKCtb= document.getElementById("mbs2").value;
		var MASKCwb= document.getElementById("mbs3").value;

		var Cp = MASKCp.split(',').join('');
		var Ctb = MASKCtb.split(',').join('');
		var Cwb = MASKCwb.split(',').join('');

		var Ctb = Ctb / 100;
		var Cbs = Math.round(Cp * Ctb * Cwb);
		document.getElementById("outputMBS").innerHTML = 
		"Metode Bunga Sederhananya (Si) : \n"+
		"		= Po x i x n \n"+
		"		= Rp. "+ MASKCp +" x "+ Ctb +" x "+ Cwb + " periode \n" +
		"		= "+ uang(Cbs, "Rp.");
	}
	function resetOutputMBS(){
		document.getElementById("outputMBS").innerHTML = "";
	}
// ---------------------------------------------------------------------------- >
// Present Value
	function hitungPV() {
		var MASKDfv = document.getElementById("pv1").value;
		var MASKDi= document.getElementById("pv2").value;
		var MASKDn= document.getElementById("pv3").value;

		var Dfv = MASKDfv.split(',').join('');
		var Di = MASKDi.split(',').join('');
		var Dn = MASKDn.split(',').join('');

		var Dip = Di / 100;
		var Dpva = Math.pow(1 + Dip,Dn);
		var Dpv = Math.round(Dfv / Dpva.toFixed(4) );
		document.getElementById("outputPV").innerHTML = 
		"Nilai Majemuk Uang yang akan datang (PV) : \n"+
		"		= Fv / ( 1 + i )^n \n"+
		"		= Rp. "+ MASKDfv +" / ( (1 + "+ Dip +")^"+ Dn +" )\n"+
		"		= "+ uang(Dpv, "Rp."); 
	}
	function resetOutputPV(){
		document.getElementById("outputPV").innerHTML = "";
	}
// ---------------------------------------------------------------------------- >
// Present Value Annuity
	function hitungPVA() {
		var MASKEr = document.getElementById("pva1").value;
		var MASKEi= document.getElementById("pva2").value;
		var MASKEn= document.getElementById("pva3").value;

		var Er = MASKEr.split(',').join('');
		var Ei = MASKEi.split(',').join('');
		var En = MASKEn.split(',').join('');

		var Eip	= Ei / 100;
		var Efixed = (Math.pow(1+Eip,En)).toFixed(4);
		var Epengalipva = (Efixed -1) / (Eip * Efixed);
		var Epva = Er * Epengalipva;
		var Erpva = Math.round(Epva);
		document.getElementById("outputPVA").innerHTML = 
		"Faktor Pengali PV-annuitas : \n"+
		"		= (( 1 + i )^n + 1 ) / ( i x ( 1 + i )^n ) \n"+
		"		= (( 1 + "+ Eip +" )^"+ En +" + 1 ) / ( "+ Eip +" x ( 1 + "+ Eip +" )^"+ En +" ) \n"+
		"		= "+ Epengalipva.toFixed(4) +" \n"+
		"Present Value Anuitas : \n"+
		"		= R x Faktor Pengali PV-annuitas \n"+
		"		= Rp. "+ MASKEr +" x "+ Epengalipva.toFixed(4) +"\n"+
		"		= "+ uang(Erpva, "Rp.");
	}
	function resetOutputPVA(){
		document.getElementById("outputPVA").innerHTML = "";
	}
// ---------------------------------------------------------------------------- >

function buttonFV() {			
		document.getElementById('collapseFVA').style.display='none';
		document.getElementById('collapseMBS').style.display='none';
		document.getElementById('collapsePV').style.display='none';
		document.getElementById('collapsePVA').style.display='none';
		document.getElementById('collapseFV').style.display='block';
	}
	function buttonFVA() {			
		document.getElementById('collapseFV').style.display='none';
		document.getElementById('collapseMBS').style.display='none';
		document.getElementById('collapsePV').style.display='none';
		document.getElementById('collapsePVA').style.display='none';
		document.getElementById('collapseFVA').style.display='block';
	}
	function buttonMBS() {			
		document.getElementById('collapseFVA').style.display='none';
		document.getElementById('collapseFV').style.display='none';
		document.getElementById('collapsePV').style.display='none';
		document.getElementById('collapsePVA').style.display='none';
		document.getElementById('collapseMBS').style.display='block';
	}
	function buttonPV() {			
		document.getElementById('collapseFVA').style.display='none';
		document.getElementById('collapseMBS').style.display='none';
		document.getElementById('collapseFV').style.display='none';
		document.getElementById('collapsePVA').style.display='none';
		document.getElementById('collapsePV').style.display='block';
	}
	function buttonPVA() {			
		document.getElementById('collapseFVA').style.display='none';
		document.getElementById('collapseMBS').style.display='none';
		document.getElementById('collapsePV').style.display='none';
		document.getElementById('collapseFV').style.display='none';
		document.getElementById('collapsePVA').style.display='block';
	}
	
// BAB 3
function resetbab3(){
		document.getElementById("subbab3").disabled = true;
	}
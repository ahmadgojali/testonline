function uang(n, currency) {
    return currency + " " + n.toFixed(0).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}

$(document).ready(function(){
//BAB 1
 		$('#fv1').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#fv2').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#fv3').maskMoney({thousands:',', precision:0, allowzero:true});

 		$('#fva1').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#fva2').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#fva3').maskMoney({thousands:',', precision:0, allowzero:true});

 		$('#mbs1').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#mbs2').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#mbs3').maskMoney({thousands:',', precision:0, allowzero:true});

 		$('#pv1').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#pv2').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#pv3').maskMoney({thousands:',', precision:0, allowzero:true});

 		$('#pva1').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#pva2').maskMoney({thousands:',', precision:0, allowzero:true});
 		$('#pva3').maskMoney({thousands:',', precision:0, allowzero:true});
//-------------------------------------------------------------------------------------------->

//BAB 2
	// Perputaran Waktu
		$('#bbaku1').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#bbaku2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#bpembantu').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#tkerja').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#adm').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#gpimpinan').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#kasmin').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#kproduksi').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#jhkerja').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#persekot').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#pproduksi').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#lpenyimpanan').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#penjkredit').maskMoney({thousands:',', precision:0, allowzero:true});
	// ----->

	// Rata2 Kas Harian
		$('#bmentah1').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#bmentah2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#bhnpembantu').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#tenkerja').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#penglainnya').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#persekot2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#pproduksi2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#lpenyimpanan2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#penpiutang').maskMoney({thousands:',', precision:0, allowzero:true});
	// ----->
//-------------------------------------------------------------------------------------------->

//BAB 3
		$("#sebelum").keyup(function() {
  			var clone = $(this).val();
  			$("#clonesblm1").html(clone);
  			$("#clonesblm2").html(clone);
		});

		$( "select" ).change(function() {
			var bulan = $( "#bulan1" ).val();
			if (bulan == "Januari") {
				$( "#bulan2" ).val("Februari");
				$( "#bulan3" ).val("Maret");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Februari") {
				$( "#bulan2" ).val("Maret");
				$( "#bulan3" ).val("April");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Maret") {
				$( "#bulan2" ).val("April");
				$( "#bulan3" ).val("Mei");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "April") {
				$( "#bulan2" ).val("Mei");
				$( "#bulan3" ).val("Juni");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Mei") {
				$( "#bulan2" ).val("Juni");
				$( "#bulan3" ).val("Juli");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Juni") {
				$( "#bulan2" ).val("Juli");
				$( "#bulan3" ).val("Agustus");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Juli") {
				$( "#bulan2" ).val("Agustus");
				$( "#bulan3" ).val("September");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Agustus") {
				$( "#bulan2" ).val("September");
				$( "#bulan3" ).val("Oktober");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "September") {
				$( "#bulan2" ).val("Oktober");
				$( "#bulan3" ).val("November");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Oktober") {
				$( "#bulan2" ).val("November");
				$( "#bulan3" ).val("Desember");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "November") {
				$( "#bulan2" ).val("Desember");
				$( "#bulan3" ).val("Januari");
				document.getElementById("subbab3").disabled = false;
			} else if (bulan == "Desember") {
				$( "#bulan2" ).val("Januari");
				$( "#bulan3" ).val("Februari");
				document.getElementById("subbab3").disabled = false;
			} else {
				alert("PILIH BULAN DENGAN BENAR !")
				$( "#bulan2" ).val("");
				$( "#bulan3" ).val("");
				document.getElementById("subbab3").disabled = true;
			}
		});


		$('#biayabulan1').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#biayabulan2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#biayabulan3').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#diskon').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#sebelum').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#nhari').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#pola1').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#pola2').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#pola3').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#pola4').maskMoney({thousands:',', precision:0, allowzero:true});
//-------------------------------------------------------------------------------------------->

// BAB 4 
	// Rasio Keuangan
		$('#alkas').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#alefek').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#alpiutang').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#alpersediaan').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#albeban').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#alaktival').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#attotn').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#attota').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#ataktiva').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#hldagang').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#hlwesel').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#hlbeban').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#hllainnya').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#hjpbank').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#hjpobligasi').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#hjphipotek').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#esaham').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#elaba').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#rkjual').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#rkhpp').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#rkbebanu').maskMoney({thousands:',', precision:0, allowzero:true});
		$('#rkbebanb').maskMoney({thousands:',', precision:0, allowzero:true});

		$('#rkpajak').maskMoney({thousands:',', precision:0, allowzero:true});
	// ----->
//-------------------------------------------------------------------------------------------->
	});
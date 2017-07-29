<?php  
    include 'mpdf/mpdf.php';
?>
<div id="coba">    
<table id="license" width="423" height="468" border="0" cellpadding="2">
    <tr>
      <td height="48" colspan="3"><div align="center">
        <h3>SMK HIGH SCHOOL</h3>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">LICENSE</div></td>
    </tr>
    <tr>
      <td height="47" colspan="3"><div>Explain that students below:</div></td>
    </tr>
    <tr>
        <td height="29" colspan="3">Name : <div style="display: inline" id="studentName">Alex</div></td>
    </tr>
    <tr>
      <td height="30" colspan="3">Class : <div style="display: inline" id="studentClass">X NET 1</div></td>
    </tr>
    <tr>
      <td height="31" colspan="3">Date : <div style="display: inline" id="studentDate">03-09-2016</div></td>
    </tr>
    <tr>
      <td height="32" colspan="3"><div align="justify">Description : <div style="display: inline" id="studentDes">description</div></div></td>
    </tr>
    <tr>
      <td height="10" colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <!---------------two column---------------------------------------->
    <td><div align="center" class="space">Tentor                                     Main Tentor</div></td>
      <!--<td colspan="2"><div align="center">Main Tentor</div></td>-->
    </tr>
    <tr>
      <td width="230" height="50">&nbsp;</td>
      <!--<td width="182" colspan="2">&nbsp;</td>-->
    </tr>
    <tr>
        <td height="51"><div align="center" class="space">(..........................................)  (...........................................)</div></td>
      <!--<td colspan="2"><div align="center">(...........................................)</div></td>-->
    </tr>
    </table>
</div>
    <button type="button" class="btn btn-default" onclick="PrintElem('#coba')" >Submit Data</button>
    
    <style>
        .space{
            white-space: pre;
        }
    </style>
    
    <script src="dist/jspdf.min.js"></script>
    <script src="dist/jspdf.plugin.autotable.js"></script>
    <script src="lib/jquery.min.js"></script>
    
    <script>
    function printout()
    {
//        var doc = new jsPDF('p','pt','b6');
//        var lic = $('#coba').clone();
////        var elem = document.getElementById("license");
////        var res = doc.autoTableHtmlToJson(elem);
////        doc.autoTable(res.columns, res.data, {theme:'plain'});
//        doc.fromHTML(lic.get(0),0,10,{});
//        doc.output('dataurlnewwindow');
        var doc=new jsPDF('p','pt','b6');
        source = $('#license')[0];
        specialElementHandlers = 
        {
            '#bypassme':function(element,renderer)
            {
                return true;
            }
        }
        
        margins=
        {
            top:50,left:60,width:500
        };
        doc.fromHTML
        (
            source, margins.left, margins.top, 
            {
                'width':margins.width, 'elementHandlers':specialElementHandlers
            },
            function(dispose)
            {
                doc.output('dataurlnewwindow');
            }
        )
//        doc.output('dataurlnewwindow');
    }
    
    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=800,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        mywindow.document.write('<style>.space{white-space: pre;}</style>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }
    </script>
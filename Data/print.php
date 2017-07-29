<html>
   <body  id="printarea">
        <table class="tble">
            <tr>
                <td>
                    Student Name
                </td>
                <td>
                    John Sypon
                </td>
            </tr>
           <tr>
                <td>
                       Student Rollnumber
                    </td>
                    <td>
                        R001
                    </td>
            </tr>
            <tr>
                <td>
                    Student Address
                </td>
                <td>
                    132 Kane Street Toledo OH 43612.
                </td>
            </tr>
            <tr>
                 <td>
                    <input type="button" value="Print" class="btn" onclick="PrintDoc()"/>
                </td>
                <td>
                    <input type="button" value="Print Preview" class="btn" onclick="PrintPreview()"/>
                </td>
            </tr>
        </table>
    </body>
</html>

<style>
@media print /*--This is for Print--*/
{
    .btn
    {
        display: none;
    }
    .tble
    {
        background-color: #CD853F;
        border:1px solid green;
        -webkit-print-color-adjust: exact
/*above line of codes will set the table background-color and change the border color when we give the print and preview (print preview only when we see on print preview via browser) command*/

    }
}
@media screen /*--This is for Print Preview Screen--*/
{
    .btn
    {
        display: none;
    }

    .tble
    {
        background-color: #CD853F;
        border:1px solid green;
    }
  }
  
  @media screen /*--This is for Screen--*/
{
    .btn
    {
        background-color: #AFAFAF;
        display: block;
    }
    .tble
    {
        background-color: #E5E5E5;
        border: 1px solid #CD853F;
    }
}
</style>

<script type="text/javascript">
/*--This JavaScript method for Print command--*/
    function PrintDoc() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
</script>
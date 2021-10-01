$(document).ready(function(){
    var tableBoard = $('#tblBoard').DataTable({
        "bProcessing": false,
        "bServerSide": false,
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bSort": false,
        "bInfo": true,
        "bAutoWidth": true,
        "sAjaxSource": "./courses.php?oper=1001",
        "bDestroy":false,
        "aoColumns": [
        {"sName" : "slno","bSortable":"false"},
        {"data" : "board_code","sClass":"alignCenter"},
        {"data" : "board_name","sClass":"alignCenter"},
        {"sName" : "action",
            "sWidth":"35%",
            "data"  : null,
            "sClass":"alignCenter",
            "defaultContent": "<button id='btnApprove' action ='btnApprove' class='btn btn-primary'><i class='fa fa-check' style='font-size: 24px' aria-hidden='true'></i></button> &nbsp;&nbsp; <button id='btnDiscard' action ='btnDiscard' class='btn btn-primary'> <i class='fa fa-times' style='font-size: 24px' aria-hidden='true'></i></button>"
        }
        ]
    });


});
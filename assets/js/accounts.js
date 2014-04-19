jQuery(document)
	.ready(
		function($) {
			$('#accounts-list').dataTable(
				{
			        "sScrollY": "200px",
			        "bPaginate": false,
			        "bScrollCollapse": true
			    }
			);
		}
	
	);

function accountsInformation(id) {
	$.ajax({
        type: "POST",
        url: '/account/displayAccountsinfo',
        data: {
            acc_id:    id,
        },
//	    async: false,
//        dataType: "json",
        success: function(data){
           
//            	alert(data.message);
            	popUpForAccouninfo(data);
//            getDailyPlanning($('#all_week').val(), $('#all_zone').val(), $('#daily_selected').val());
        },
        error: function (){
            alert('Ajax failure!!');
        }
    });
}

function popUpForAccouninfo(data){
	$('#popup').remove();
	$(data).attr('id','popup').appendTo('body');
    $('#popup').modal('show');
}

//var POPUP = (function() {
//    popUpForEditWindows = function (data,textStatus,XMLHttpRequest){
//        $('#edit').remove();
//        $(data).attr('id','edit').appendTo('body');
//        $('#edit').modal('show');
//        $("#btn-employee-add").click(addEmployee);
//
//        $('#btn-employee-cancel').click(function () {
//            $('#edit').modal('hide');
//        });
//
//       $('.time-picker').datetimepicker({
//            datepicker:false,
//            format:'g:i A',
//            formatTime: 'g:i A',
//            step:30,
//            minTime:'00:00 AM',
//            maxTime:'11:59 PM'
//        });
//    },
//
//    addEmployee = function(){
//        $.ajax({
//            type: "POST",
//            url: '/bo/planning/index.php?func=add-employee',
//            data: {
//                employee_id:    $('#frm-employee #employee_id').val(),
//                start:          $('#frm-employee #employee_start').val(),
//                end:            $('#frm-employee #employee_end').val(),
//                day_id : $('#daily_selected').val(),
//                zone_id: $('#all_zone').val(),
//                week_id: $('#all_week').val()
//            },
////		    async: false,
//            dataType: "json",
//            success: function(data,textStatus,XMLHttpRequest){
//                console.log(data.status);
//                if (data.status == 1) {
//                    $('#edit').modal('hide');
//                }
//                getDailyPlanning($('#all_week').val(), $('#all_zone').val(), $('#daily_selected').val());
//            },
//            error: function (){
//                alert('Ajax failure!!');
//            }
//        });
//
//    },
//
//    showEmployee = function(id){
//        $.ajax({
//            type: "POST",
//            url: '/bo/planning/index.php',
//            data: {
//                func : 'show-add-employee',
//                day_id : $('#daily_selected').val(),
//                zone_id: $('#all_zone').val(),
//                week_id: $('#all_week').val()
//            },
//            success: popUpForEditWindows,
//            error: function (){
//                alert('Ajax failure!!');
//            }
//        });
//    };
//
//    return {
//        init: function (){  },
//        show: function(){showEmployee()}
//    };
//
//}());
//
//EMPLOYEE.init();
$.ajax({ url: 'http://monkey-problems.com/FinalPNWCoach/apps/endTheTrendDBReset.php',
 data: {action: 'test'},
 dataType: 'json',
 type: 'post',
 success: function(output) {

  var $reset = output[0];
  document.getElementById("reset").src = $reset;
 
    }
 });


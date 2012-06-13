   
  //Equalizing any three css elements by tallest height
  function equalHeight(group) {
    var tallest = 0;
    group.each(function() {
      var thisHeight = $(this).height();
      if(thisHeight > tallest) {
        tallest = thisHeight;
      }
    });
    group.height(tallest);
  }

  //insert tag names heres of elements to align height to
  $(document).ready(function() {
    equalHeight($("#main, #rightSidebar, #insideContainer"));

  });
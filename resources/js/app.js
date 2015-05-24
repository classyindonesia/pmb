 	$(function () { $("[data-toggle='tooltip']").tooltip(); });
 


 $.fn.textlimit = function(limit)
{
    return this.each(function(index,val)                       
    {
        var $elem = $(this);
        var $limit = limit;
        var $strLngth = $(val).text().length;  // Getting the text
        if($strLngth > $limit)
        {
          $($elem).text($($elem).text().substr( 0, $limit )+ "...");
        }
    })
};
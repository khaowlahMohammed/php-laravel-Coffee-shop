
var id;
function lunch(i)
{
    id=i;
    $('#delete').modal('show');
}


 function confirm()
 {
    
    $.ajax({
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
        url:'/delete',
        data:{
            id_product:id
        },

        method:"get",
        success:function(response){
            //عملية تحديث تلقائية عند الحذف دون الحاجةالى رفريش
            location.reload();
        }
    });
 }

    $(document).ready(function() {
    // $('#category').focus(function() {
    $('#category').on('change', function() {
       let categoryID = $(this).val();
       
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       if(categoryID) {
           $.ajax({
               url: '/getCourse/'+categoryID,
               type: "GET",
            //    data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                    $('#course').empty();
                    $('#course').append('<option hidden>Choose Course</option>'); 
                    $.each(data, function(data, course){
                        $('select[name="course_id"]').append('<option value="'+ course.id +'">' + course.nama+ '</option>');
                    });
                }else{
                    $('#course').empty();
                }
             }
           });
       }else{
         $('#course').empty();
       }
    });
    });

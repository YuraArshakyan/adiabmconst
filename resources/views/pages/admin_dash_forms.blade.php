@auth
    @extends('layout.admin')
    @section('title', 'Admin')
    @section('content')
        @notifyCss
        @notifyJs
        <div class="container">
            <h1>Welcome {{Auth::user()->name}}</h1>



            
            <label for="ShowOnlyLable" class="text-center ShowOnlyLable">Show Only:</label>
            <select name="ShowOnly" class="ShowOnly text-center">
                <option value="All"  class="text-center"selected>All</option>
                <option value="Contacts" class="text-center">ContactContact</option>
                <option value="Updates" class="text-center">Updates</option>
            </select>

            <label class="text-center">Submited Forms: {{$forms_count}} | </label>
            <label  class="text-center">Today Submited Forms: {{$today_forms}} | </label>
            <label  class="text-center">Yesterday Submited Forms: {{$yesterday_forms}} | </label>
            <form action={{url('/exportForms/1')}} method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-info w-100 exportButton">Export all to excel</button>
            </form>
            <div class="row">
                <form action={{url('/exportForms/2')}} method="POST" class="col-6">
                    @csrf
                    <button type="submit" class="btn btn-outline-info w-100 exportButton">Export Updates</button>
                </form>
                <form action={{url('/exportForms/3')}} method="POST" class="col-6">
                    @csrf
                    <button type="submit" class="btn btn-outline-info w-100 exportButton">Export Contacts</button>
                </form>
            </div>
            
                <div class="responsiv_table">
                    <table class="table table-dark table-hover mt-3" id="submissionTable">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">status</th>
                            <th scope="col">error</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">phone</th>
                            <th scope="col">message</th>
                            <th scope="col">form_name</th>
                            <th scope="col">created_at</th>
                            <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($forms as $forms)
                                <form action={{url('/destroyData' .'/' . $forms->id)}} method="POST">
                                    @csrf
                                    <tr>
                                        <th class="" scope="row">{{$forms->id}}</th>
                                        <th class="">done</th>
                                        <th class="">-</th>
                                        <td class="">{{($forms->name) ? $forms->name : 'NULL'}}</td>
                                        <td class="">{{($forms->email) ? $forms->email : 'NULL'}}</td>
                                        <td class="">{{($forms->phone) ? $forms->phone : 'NULL'}}</td>
                                        <td class="">{{($forms->message) ? $forms->message : 'NULL'}}</td>
                                        <td class="">{{($forms->form_name) ? $forms->form_name : 'NULL'}}</td>
                                        <td class="">{{($forms->created_at) ? $forms->created_at : 'NULL'}}</td>
                                        <td class=""><button type="submit" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
        </div>

    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script>
        // $(document).ready(function() {
        //     let get_button_listener_export = document.querySelector('.exportButton');
        //     $(get_button_listener_export).on('click', function(){
        //         $.ajax({
        //             type: "POST",
        //             headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        //             url: "/exportForms",
        //             data: {

        //             },
        //             success: function(response){
        //                 console.log('success');
        //             }
        //         })
        //     });
        // });
    </script>



    <script>
        $(document).ready(function() {
            let table = document.querySelector('.ShowOnly');
            $(table).on('change', function(){
                let value_to_show = table.value.toLowerCase()
                rows = $('#submissionTable tbody tr').get(); 
                $('#submissionTable tbody').empty();

                let Sorted = [];
                let Hide = [];

                $.each(rows, function(index, row) {
                    if(row.classList.contains('d-none')){
                        row.classList.remove('d-none');                            
                    }
                });

                $.each(rows, function(index, row) {
                    var form = $(row).find('td:eq(4)').text().toLowerCase(); 

                    if(value_to_show != 'all'){
                        if (form.includes(value_to_show)) {
                            Sorted.push(row);
                        }else {
                            row.classList.add('d-none');
                            Sorted.push(row);
                        }
                    }else{
                        if(row.classList.contains('d-none')){
                            row.classList.remove('d-none');                            
                        }
                        Sorted.push(row);
                    }                    
                });
                $('#submissionTable tbody').empty();
                $('#submissionTable tbody').append(Sorted);
                // $('#submissionTable tbody').append(Hide);
            });
        })
        
        $(document).ready(function() {
            $('#export-btn').on('click', function() {
                let visibleData = [];
                $('#submissionTable tbody tr:visible').each(function() {
                    let rowData = {
                        id: $(this).find('th:first').text(),
                        status: $(this).find('th:nth-child(2)').text(),
                        error: $(this).find('th:nth-child(3)').text(),
                        name: $(this).find('td:nth-child(4)').text(),
                        email: $(this).find('td:nth-child(5)').text(),
                        phone: $(this).find('td:nth-child(6)').text(),
                        message: $(this).find('td:nth-child(7)').text(),
                        form_name: $(this).find('td:nth-child(8)').text(),
                        created_at: $(this).find('td:nth-child(9)').text(),
                    };
                    visibleData.push(rowData);
                });

                // Send the data to the server
            });
        });

    </script>
@endauth


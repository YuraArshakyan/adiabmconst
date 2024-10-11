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
                <option value="ContactContact" class="text-center">ContactContact</option>
                <option value="FrontContact" class="text-center">FrontContact</option>
                <option value="Updates" class="text-center">Updates</option>
            </select>

            <label class="text-center">Submited Forms: {{$forms_count}} | </label>
            <label  class="text-center">Today Submited Forms: {{$today_forms}} | </label>
            <label  class="text-center">Yesterday Submited Forms: {{$yesterday_forms}} | </label>

            <button type="submit" class="btn btn-outline-info w-100">Export to excel</button>

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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            let table = document.querySelector('.ShowOnly');
            $(table).on('change', function(){
                let value_to_show = table.value.toLowerCase()
                console.log(value_to_show);
                rows = $('#submissionTable tbody tr').get(); 
                $('#submissionTable tbody').empty();
                let Sorted = [];
                let Hide = [];
                $.each(rows, function(index, row) {
                    var form = $(row).find('td:eq(4)').text().toLowerCase(); 
                    if(value_to_show != 'all'){
                        if (form.includes(value_to_show)) {
                            // console.log(row);
                            Sorted.push(row);
                        }else {
                            row.classList.add('d-none');
                            Sorted.push(row);
                        }
                    }else{
                        if(row.classList.contains('d-none')){
                            console.log('rows');
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


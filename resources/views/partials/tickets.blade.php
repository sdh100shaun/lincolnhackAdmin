<div class="col-md-8 col-md-offset-1"> <table class="table-bordered table-striped table-responsive table">
    <thead>

    <th>Name :
    </th>
    <th>email</th>
    <th>Has confirmed</th>

    </tr>
    </thead>

    <tbody class="list">
    <form>

        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket["First Name"]}} {{$ticket->Surname}} </td>
                <td><a href="mailto:{{$ticket->Email}}">{{$ticket->Email}}</a> </td>
                <td>{{$ticket->claimed}} </td>
            </tr>
        @endforeach
    </form>
    </tbody>
    </table></div>
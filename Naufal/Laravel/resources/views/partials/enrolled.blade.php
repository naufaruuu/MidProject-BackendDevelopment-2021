<!-- Enrolled Course -->
<div class="card info-panel">
    <h3>Enrolled Classes:</h3>
    <table class="table table-striped" height="100px">
        <thead>
            <tr>
                {{-- define table --}}
                <th scope="col" style="text-align: center; width: 5px">No.</th>
                <th scope="col" style="text-align: center; width: 300px">Course Name</th>
                <th scope="col"  style="text-align: center;">Progress Bar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($course->sortBy('title') as $co)
                @php
                    $index = $co->number;
                    // convert index 1 2 to a b //
                    include app_path() . '/function/converter.php';
                    $percent = ($session->$index * 100) / $co->sessions;
                @endphp
                @if ($enroll->$index >= 1)
                    <tr>
                        <th scope="row">{{ $col }}</th>
                        <td>{{ $co->title }}</td>
                        <td>
                            <div class="progress position-relative" style="height: 25px;">
                                <div class="progress-bar progress-bar-striped bg-info" role=" progressbar"
                                    style="width: {{ $percent }}%" aria-valuenow="{{ $percent }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                <small class="justify-content-center d-flex position-absolute w-100 "
                                    style="color:black; font-size:15px;">{{ $session->$index }}/{{ $co->sessions }} completed </small>
                            </div>

                        </td>
                    </tr>
                    @php
                        $col++;
                    @endphp
                @endif
            @endforeach

            {{-- no enroll --}}
            @if ($col === 1)
                <th scope="row">1</th>
                <td>You haven't enrolled any course.</td>
                <td> </td>
                <td> </td>
            @endif
        </tbody>
    </table>
</div>

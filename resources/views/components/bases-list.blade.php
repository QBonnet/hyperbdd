@props(['bases' => $bases])







<div id=hide_part>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Application Type</th>
                <th scope="col">Description</th>
                <th scope="col">See</th>
                <th scope="col">Download</th>
                <th scope="col">Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php $compteurDeBase = 0; ?>

            @foreach($bases as $key=>$base)


                <?php
                    if ($base->reach == 'public') {
                ?>

                <tr>
                    <th scope="row">{{$compteurDeBase}}</th>
                    <td>{{$base->dbname}}</td>
                    <td>{{$base->applicationType->application_name}}</td>
                    <td>{{$base['description']}}</td>
                    <td>
                        <a class="btn btn-primary btn-xl" onclick="window.location.href='{{'/bases/'.$base->id}}'">See</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-xl" onclick="downloadBase({{$base->id}})" href="#">Download</a>
                    </td>
                    <td>
                        <img
                            src="images/flower.jpg"
                            alt="database main picture"
                            style="max-width: 100%;
                                    height: auto;"
                        />
                    </td>
                </tr>

                <?php
                    $compteurDeBase += 1;

                    }
                ?>

            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $bases->links() }}
    </div>
</div>



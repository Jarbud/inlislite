<div class="table-responsive">
    <table class="table table-striped table-bordered" id="histori-table">
        <thead>
            <th>#</th>
            <th>Waktu</th>
            <th>User ID</th>
            <th>IP</th>
            <th>Keyword</th>
            <th>Jenis Bahan</th>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="histori-id" name="histori-id" style="width: 63px"></td>
                <td><input type="text" id="histori-time" name="histori-time"></td>
                <td><input type="text" id="histori-userid" name="histori-userid"></td>
                <td><input type="text" id="histori-ip" name="histori-ip"></td>
                <td><input type="text" id="histori-key" name="histori-key"></td>
                <td><input type="text" id="histori-bhn" name="histori-bhn"></td>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->ID}}</td>
                <td>{{$item->waktu}}</td>
                <td>{{$item->User_id}}</td>
                <td>{{$item->ip}}</td>
                <td>{{$item->keyword}}</td>
                <td>{{$item->jenis_bahan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
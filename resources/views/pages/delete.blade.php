@endforeach($deletes as $delete)
<!-- <tr>
    <td>$delete->nm</td>
    <td>
        <a href="{{url('/delete',['id_booking'->id])}}">
            <button>delete</button>
        </a>
    </td>
</tr> -->

<tbody>
    <?php $no = 1; ?>
    @foreach($boking as $dtl)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$dtl->nm}}</td>
        <td>{{$dtl->cek_in}}</td>
        <td>{{$dtl->cek_out}}</td>
        <td>{{$dtl->fasilitas}}</td>
        <td>{{$dtl->email}}</td>
        <td>{{$dtl->no_tlp}}</td>
        <td>{{$dtl->jumlah_tamu}}</td>
        <td> <button> <a href="/ubah/{{$dtl->id_booking}}"> Edit </a></button></td>
        <td> <button> <a href="/delete{{$delete->id_booking}}"> delete </a></button></td>
        <td> <button> <a href="tugas/yk.html"> Transaksi </a> </button></td>
    </tr>
    @endforeach
</tbody>
@endforeach
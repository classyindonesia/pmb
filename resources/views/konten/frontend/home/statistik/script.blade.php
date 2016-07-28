
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'data statistik web',
            x: -20 //center
        },
        subtitle: {
            text: ' -',
            x: -20
        },
        xAxis: {
            @php($tgl_skrg = date('d'))
            @if($tgl_skrg < 15)
                @php($tgl_skrg=15)
            @endif
            categories: [
                @for($i=1;$i<=$tgl_skrg;$i++)
                    "{!! $i.' '.Fungsi::bulan2(date('m')).' '.date('Y') !!}",
                @endfor

                ]
        },
        yAxis: {
            title: {
                text: 'Jumlah View'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' clicks'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Hits',
            data: [
                @for($i=1;$i<=$tgl_skrg;$i++)
                    {!! $hits->countHitsToday(date('Y').'-'.date('m').'-'.$i) !!},
                @endfor

            ]
        }]
    });
});	

</script>
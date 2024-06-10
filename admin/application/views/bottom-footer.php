<div id="open-alert"></div>

<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="assets/js/atlantis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>

<?php $this->load->view("alert"); ?>

<script>
    $("#sortable").sortable();
    $("#sortable").on("sortupdate", function () {
        var data = $(this).sortable("serialize");
        var data_url = $(this).data("url");
        $.post(data_url, {
            data: data
        }, function (response) {
            $("#open-alert").iziModal({
                title: 'Tebrikler!',
                subtitle: 'Sıralama başarıyla değiştirildi.',
                headerColor: '#22bb33',
                background: null,
                theme: 'light', // light
                icon: 'fa fa-check-circle',
                iconText: null,
                iconColor: '#FFFFFF',
                rtl: false,
                width: 600,
                top: null,
                bottom: null,
                borderBottom: true,
                padding: 0,
                radius: 3,
                zindex: 999,
                bodyOverflow: false,
                openFullscreen: false,
                closeOnEscape: true,
                closeButton: true,
                timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
                transitionIn: 'comingIn',
                transitionOut: 'comingOut',
                transitionInOverlay: 'fadeIn',
                transitionOutOverlay: 'fadeOut',
            });
            $("#open-alert").iziModal("open");
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        $("#add-row").on("change", "#isActive", function () {

            var data = $(this).prop("checked");
            var data_url = $(this).data("url");

            // alert(data_url);

            if (data !== "" && data_url !== "") {
                $.post(data_url, {
                    data: data
                }, function (response) {

                    $("#open-alert").iziModal({
                        title: 'Tebrikler!',
                        subtitle: 'Durum başarıyla değiştirildi.',
                        headerColor: '#22bb33',
                        background: null,
                        theme: 'light', // light
                        icon: 'fa fa-check-circle',
                        iconText: null,
                        iconColor: '#FFFFFF',
                        rtl: false,
                        width: 600,
                        top: null,
                        bottom: null,
                        borderBottom: true,
                        padding: 0,
                        radius: 3,
                        zindex: 999,
                        bodyOverflow: false,
                        openFullscreen: false,
                        closeOnEscape: true,
                        closeButton: true,
                        timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
                        transitionIn: 'comingIn',
                        transitionOut: 'comingOut',
                        transitionInOverlay: 'fadeIn',
                        transitionOutOverlay: 'fadeOut',
                    });
                    $("#open-alert").iziModal("open");

                });
            } else {
                $("#open-alert").iziModal({
                    title: 'Hata!',
                    subtitle: 'Durum değerleri boş veya eksik geldiği için başarısız oldu.',
                    headerColor: '#bb2124',
                    background: null,
                    theme: 'light', // light
                    icon: 'fa fa-times-circle',
                    iconText: null,
                    iconColor: '#FFFFFF',
                    rtl: false,
                    width: 600,
                    top: null,
                    bottom: null,
                    borderBottom: true,
                    padding: 0,
                    radius: 3,
                    zindex: 999,
                    bodyOverflow: false,
                    openFullscreen: false,
                    closeOnEscape: true,
                    closeButton: true,
                    timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
                    transitionIn: 'comingIn',
                    transitionOut: 'comingOut',
                    transitionInOverlay: 'fadeIn',
                    transitionOutOverlay: 'fadeOut',
                });
                $("#open-alert").iziModal("open");
            }

        });

    });
</script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="assets/js/setting-demo.js"></script>
<script src="assets/js/demo.js"></script>
<script>
    Circles.create({
        id: 'circles-1',
        radius: 45,
        value: 60,
        maxValue: 100,
        width: 7,
        text: 5,
        colors: ['#f1f1f1', '#FF9E27'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-2',
        radius: 45,
        value: 70,
        maxValue: 100,
        width: 7,
        text: 36,
        colors: ['#f1f1f1', '#2BB930'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-3',
        radius: 45,
        value: 40,
        maxValue: 100,
        width: 7,
        text: 12,
        colors: ['#f1f1f1', '#F25961'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets: [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>

<script>
    $(document).ready(function () {
        $('#add-row').DataTable({
            "pageLength": 5,
            "language":
                {
                    "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/tr.json"
                }
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function () {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>

</body>
</html>
<section class="transactions overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">My Transactions</h2>
                <div class="mb-30">
                    <p class="text-lg color-palette-2 mb-12">You’ve spent</p>
                    <h3 class="text-5xl fw-medium color-palette-1">Rp 4.518.000.500</h3>
                </div>
                <div class="row mt-30 mb-20">
                    <div class="col-lg-12 col-12 main-content">
                        <div id="list_status_title">
                            <a data-filter="*" href="#" class="btn btn-status rounded-pill text-sm btn-active me-3">All
                                Trx</a>
                            <a data-filter="success" href="#"
                                class="btn btn-status rounded-pill text-sm me-3">Success</a>
                            <a data-filter="pending" href="#"
                                class="btn btn-status rounded-pill text-sm me-3">Pending</a>
                            <a data-filter="failed" href="#" class="btn btn-status rounded-pill text-sm me-3">Failed</a>
                        </div>
                    </div>
                </div>
                <div class="latest-transaction">
                    <p class="text-lg fw-medium color-palette-1 mb-14">Latest Transactions</p>
                    <div class="main-content main-content-table overflow-auto">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="color-palette-1">
                                    <th class="" scope="col">Game</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="list_status_item">
                                <tr data-category="pending" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="<?= base_url(); ?>assets/img/overview-1.png"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Mobile
                                                Legends:
                                                The New
                                                Battle 2021</p>
                                            <p class="text-xs fw-normal text-start color-palette-2 m-0">Desktop</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">200 Gold</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 290.000</p>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="float-start icon-status pending"></span>
                                            <p class="fw-medium text-start color-palette-1 m-0 position-relative">
                                                Pending</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="../member/transactions-detail.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="success" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="<?= base_url(); ?>assets/img/overview-2.png"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Call of
                                                Duty:Modern</p>
                                            <p class="text-xs fw-normal text-start color-palette-2 m-0">Desktop</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">550 Gold</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 740.000</p>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="float-start icon-status success"></span>
                                            <p class="fw-medium text-start color-palette-1 m-0 position-relative">
                                                Success</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="../member/transactions-detail.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="failed" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="<?= base_url(); ?>assets/img/overview-3.png"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Clash of
                                                Clans</p>
                                            <p class="text-xs fw-normal text-start color-palette-2 m-0">Mobile</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">100 Gold</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 120.000</p>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="float-start icon-status failed"></span>
                                            <p class="fw-medium text-start color-palette-1 m-0 position-relative">Failed
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="../member/transactions-detail.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="pending" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="<?= base_url(); ?>assets/img/overview-4.png"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">The Royal
                                                Game</p>
                                            <p class="text-xs fw-normal text-start color-palette-2 m-0">Mobile</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">225 Gold</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 200.000</p>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="float-start icon-status pending"></span>
                                            <p class="fw-medium text-start color-palette-1 m-0 position-relative">
                                                Pending</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="../member/transactions-detail.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script>
        $(document).ready(function () {
            $(".btn-status").click(function () {
                $(this).addClass("btn-active");
                $(".btn-status").not(this).removeClass("btn-active");
            });


            $('#list_status_title a').click(function (event) {
                var filter = $(event.target).attr('data-filter');
                $('#list_status_item tr').each(function () {
                    var item = $(this);
                    console.log(item.attr('data-category').indexOf(filter) != -1);

                    if (filter == '*' || (item.attr('data-category').indexOf(filter) != -1))
                        item.show();
                    else
                        item.hide();
                });
            });
        });
    </script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <!-- Main container -->
    <div class="d-flex flex-column flex-md-row">
        <!-- Collapsible Sidebar for small devices -->
        <div class="d-md-none p-2">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                Toggle Sidebar
            </button>
        </div>

        <!-- Sidebar -->
        <div class="collapse collapse-horizontal d-md-block bg-light p-3 sidebar" id="sidebarMenu">
            <img src="../images/Logo.png" alt="Logo" class="img-fluid mb-3">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-house"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('adminanalytics')}}"><i class="bi bi-bar-chart"></i> Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">My Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-wallet2"></i> My Wallets</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-currency-exchange"></i> Exchanges</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-info-circle"></i> Help</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-box-arrow-left"></i> Log out</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content p-4 flex-grow-1 w-100">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2>Welcome {{Auth::guard('admin')->user()->name}}!</h2>
                    <p>Hope you are healthy and happy today...</p>
                </div>
                <div class="d-flex align-items-center">
                    <input type="search" placeholder="Search..." class="form-control w-75 me-2">
                    <img src="../images/Ellipse 298.png" alt="Profile" class="rounded-circle" style="width: 40px;">
                </div>
            </div>

            <!-- Main Content -->
            <div class="container">
                <div class="row">
                    <!-- Widgets -->
                    <div class="col-lg-9">
                        <div class="row">
                            <!-- Widget 1 -->
                            <div class="col-sm-6 col-md-4 mb-3">
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "CAPITALCOM:EURUSD",
                                            "width": "100%",
                                            "height": 220,
                                            "locale": "en",
                                            "dateRange": "12M",
                                            "colorTheme": "dark",
                                            "isTransparent": false
                                        }
                                    </script>
                                </div>
                            </div>

                            <!-- Widget 2 -->
                            <div class="col-sm-6 col-md-4 mb-3">
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "BITSTAMP:BTCUSD",
                                            "width": "100%",
                                            "height": 220,
                                            "locale": "en",
                                            "dateRange": "12M",
                                            "colorTheme": "dark",
                                            "isTransparent": false
                                        }
                                    </script>
                                </div>
                            </div>

                            <!-- Widget 3 -->
                            <div class="col-sm-6 col-md-4 mb-3">
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "BYBIT:POPCATUSDT.P",
                                            "width": "100%",
                                            "height": 220,
                                            "locale": "en",
                                            "dateRange": "12M",
                                            "colorTheme": "dark",
                                            "isTransparent": false
                                        }
                                    </script>
                                </div>
                            </div>

                            <!-- Statistics Chart -->
                            <div class="col-12">
                                <h5>Statistics</h5>
                                <canvas id="statsChart" width="100%" height="100"></canvas>
                            </div>

                            <!-- Trending Market -->
                            <div class="col-12 mt-3">
                                <h5>Trending Market</h5>
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                        {
                                            "width": "100%",
                                            "height": 550,
                                            "defaultColumn": "overview",
                                            "screener_type": "crypto_mkt",
                                            "displayCurrency": "USD",
                                            "colorTheme": "dark",
                                            "locale": "en"
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widgets -->
                    <div class="col-lg-3">
                        <!-- Buy | Sell Widget -->
                        <div class="card p-4 mb-3 mt-2">
                            <h5 class="text-center">Buy | Sell</h5>
                            <p class="text-center">Ethereum Price</p>
                            <h6 class="text-center">$ 0.1824</h6>
                            <div class="mb-3">
                                <input type="number" placeholder="0.1824" class="form-control me-2 mb-2">
                                <select class="form-select">
                                    <option value="btc">BTC</option>
                                    <option value="eth">ETH</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">Buy ETH</button>
                        </div>

                        <!-- Quick Transfer -->
                        <div class="card p-4 mb-3">
                            <h5>Quick Transfer</h5>
                            <div class="d-flex mb-3">
                                <img src="../images/team1.jpg" alt="User 1" class="rounded-circle me-2" style="width: 40px;">
                                <img src="../images/team2.jpg" alt="User 2" class="rounded-circle me-2" style="width: 40px;">
                                <img src="../images/team3.jpg" alt="User 3" class="rounded-circle me-2" style="width: 40px;">
                                <img src="../images/team4.jpg" alt="User 4" class="rounded-circle me-2" style="width: 40px;">
                            </div>
                            <h6>Amount</h6>
                            <input type="number" placeholder="$1,500" class="form-control mb-2">
                            <button class="btn btn-primary w-100">Transfer <i class="bi bi-arrow-right"></i></button>
                        </div>

                        <!-- TradingView Timeline Widget -->
                        <div class="mt-3">
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {
                                        "feedMode": "all_symbols",
                                        "isTransparent": false,
                                        "displayMode": "regular",
                                        "width": "100%",
                                        "height": 550,
                                        "colorTheme": "dark",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

    <!-- Stats Chart Script -->
    <script>
        const ctx = document.getElementById('statsChart').getContext('2d');
        const statsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Spending',
                    data: [3000, 4500, 5000, 7980, 6200, 5800, 5000, 6200, 7200, 4500, 5600, 6800],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>

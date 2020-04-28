<!doctype html>
<html>

<head>
	<script src="../../../../../dmxAppConnect/dmxAppConnect.js"></script>
	<!--	<base href="/USB/k1oV9bKQmKRBxv416Fh/AccountDashboard/Index/1/">  -->
	<meta charset="UTF-8">
	<title>Untitled Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</head>

<body id="testdata" is="dmx-app">

	<style>
		@media screen {
			#printSection {
				display: none;
			}
		}

		@media print {
			body * {
				visibility: hidden;
			}

			#printSection,
			#printSection * {
				visibility: visible;
			}

			#printSection {
				position: absolute;
				left: 0;
				top: 0;
			}
		}
	</style>

	<script type="text/javascript">
		document.getElementById("btnPrint").onclick = function () {
										printElement(document.getElementById("printThis"));
									};

									function printElement(elem) {
										var domClone = elem.cloneNode(true);
										
										var $printSection = document.getElementById("printSection");
										
										if (!$printSection) {
											var $printSection = document.createElement("div");
											$printSection.id = "printSection";
											document.body.appendChild($printSection);
										}
										
										$printSection.innerHTML = "";
										$printSection.appendChild(domClone);
										window.print();
									}


	</script>

	<!---------------------->
	<div class="wrap">
		<h1>Bootstrap Modal Example</h1>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">
			Large modal
		</button>
	</div>
	<div id="printThis">
		<div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-lg">

				<!-- Modal Content: begins -->
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="gridSystemModalLabel">Your Headings</h4>
					</div>

					<!-- Modal Body -->
					<div class="modal-body">
						<div class="body-message">
							<h4>Any Heading</h4>
							<p>And a paragraph with a full sentence or something else...</p>
						</div>
					</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button id="btnPrint" type="button" class="btn btn-default">Print</button>
					</div>

				</div>
				<!-- Modal Content: ends -->

			</div>
		</div>
	</div>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<meta name="theme-color" content="#000000" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="description" content="Sount Input Test" />
	<meta name="keywords" content="" />
	<title>LIFF Starter</title>
</head>
<body>
	<p id="liffAppContent"></p>
	<p id="liffInitErrorMessage"></p>

	<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
	<script>
		const channelId = 1653921037;
		/**
		 * Initialize LIFF
		 * @param {string} myLiffId The LIFF ID of the selected element
		 */
		function initializeLiff(myLiffId) {
			liff.init({
				liffId: myLiffId
			}).then(() => {
				// start to use LIFF's api
				initializeApp();
			}).catch(error => {
				document.getElementById('liffAppContent').classList.add('hidden');
				document.getElementById('liffInitErrorMessage').classList.remove('hidden');
			});
		}

		initializeLiff(channelId);
	</script>
</body>
</html>

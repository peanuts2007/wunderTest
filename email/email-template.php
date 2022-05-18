<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Submission Details Are</title>
	</head>
	<body style="background-color:#f47735;font-family:-apple-system, BlinkMacSystemFont, 'segoe ui', roboto, oxygen, ubuntu, cantarell, 'fira sans', 'droid sans', 'helvetica neue', Arial, sans-serif;box-sizing:border-box;font-size:16px;">
		<div style="background-color:#fff;margin:30px;box-sizing:border-box;font-size:16px;">
			<h1 style="padding:40px;box-sizing:border-box;font-size:24px;color:#ffffff;background-color:#f47735;margin:0;">A Email has been Submitted</h1>
			<p style="padding:40px 40px 20px 40px;margin:0;box-sizing:border-box;font-size:16px;">A user has submitted details.</p>
			<h2 style="padding:20px 40px;margin:0;color:#394453;box-sizing:border-box;">The Results are:</h2>
			<div style="box-sizing:border-box;padding:0 40px 20px;">
				<table style="border-collapse:collapse;width:100%;">
					<tbody>
						
                        <tr>
							<td style="padding:15px 0;text-decoration:underline;">Name</td>
							<td style="text-align:right;"><?=$name?></td>
						</tr>
                        <tr>
							<td style="padding:15px 0;text-decoration:underline;">Surname</td>
							<td style="text-align:right;"><?=$surname?></td>
						</tr>
                        <tr>
							<td style="padding:15px 0;text-decoration:underline;">Email</td>
							<td style="text-align:right;"><?=$email?></td>
						</tr>

                        <tr>
							<td style="padding:15px 0;text-decoration:underline;">Message</td>
							<td style="text-align:right;"><?=$message?></td>
						</tr>

                       
                        </tbody>
				</table>
            </div>

            
		</div>
	</body>
</html>
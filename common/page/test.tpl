<!DOCTYPE html>
{%html framework="common:static/mod.js" class="expanded"%}
	{%head%}
	    <meta charset="utf-8"/>
    {%require name="common:static/style.css"%}
	{%/head%}
	{%placeholder type="modjs"%}
	{%body%}

		<div id='p1'>
			<p>test page 1</p>
		</div>

		<div id='p2'>
			<p>test page 2</p>
		</div>

		<div id='p3'>
			<p>test page 3</p>
		</div>

		<div id='p4'>
			<p>test page 4</p>
		</div>

		<script>
				require.async('common:widget/test/test.js', function(t){
					t.init('p1', 'red');
				});
		</script>

		<script>
				require.async('common:widget/test/test.js', function(t){
					t.init('p4', 'grey');
				});
		</script>

		{%script%}
			require.async('common:widget/test/test.js', function(t){
				t.init('p2', 'blue');
			});
		{%/script%}

		{%script%}
			require.async('common:widget/test/test.js', function(t){
				t.init('p3', 'green');
			});
		{%/script%}


	{%/body%}
{%/html%}

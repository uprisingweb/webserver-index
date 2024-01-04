<?php
function embedded_phpinfo()
{
    ob_start();
    phpinfo();
    $phpinfo = ob_get_contents();
    ob_end_clean();
    $phpinfo = preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $phpinfo);
    echo $phpinfo;
     
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>WebServer</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
		
		<style type="text/css">
		
			/* reset css */
			html, body, div, span, applet, object, iframe,
			h1, h2, h3, h4, h5, h6, p, blockquote, pre,
			a, abbr, acronym, address, big, cite, code,
			del, dfn, em, img, ins, kbd, q, s, samp,
			small, strike, strong, sub, sup, tt, var,
			b, u, i, center,
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td,
			article, aside, canvas, details, embed, 
			figure, figcaption, footer, header, hgroup, 
			menu, nav, output, ruby, section, summary,
			time, mark, audio, video {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
				box-sizing: border-box;
			}
			/* HTML5 display-role reset for older browsers */
			article, aside, details, figcaption, figure, 
			footer, header, hgroup, menu, nav, section {
				display: block;
			}
			body {
				line-height: 1;
			}
			ol, ul {
				list-style: none;
			}
			blockquote, q {
				quotes: none;
			}
			blockquote:before, blockquote:after,
			q:before, q:after {
				content: '';
				content: none;
			}
			table {
				border-collapse: collapse;
				border-spacing: 0;
			}
			/* end reset css */

			:root {
				--bg-1: #FFFAF2;
				--bg-1-hover: #EAEAEA;
				--bg-2: #FFFFFF;
				--bg-2-hover: #FFFFFF;
				--border-1: #EAEAEA;
				--border-2: #CCCCCC;
				--link-color: #0015A8;
				--link-color-hover: #780104;
				--text-color: #232323;
				--max-width: 800px;
				--font-size: 13px;
			}

			body {
				font-size: var(--font-size);
				font-family: 'JetBrains Mono', monospace;
				color: var(--text-color);
			}

			a, a:visited {
				text-decoration:none;
				color: var(--link-color);
			}

			a:hover {
				color: var(--link-color-hover);
			}			

			.table-container {
			  display: block;
			  margin: 1rem auto;
			  width: 90%;
			  max-width: var(--max-width);
			}

			.flex-table {
			  display: flex;
			  flex-flow: row wrap;
			  border-left: solid 1px var(--border-1);
			  transition: 0.5s;
			}

			.flex-table .flex-row:hover {
			    background-color: var(--bg-1-hover);
			    transition: 500ms;
			}
			

			.flex-row {
				width: calc(100% / 3);
				text-align: center;
				border: solid 1px var(--border-1);
				background-color: var(--bg-1);
				padding: 0.5rem;
			}

			@media (max-width: 767px) {
				body { 
					font-size: 200%;
					display:none; 
				}
				
				.flex-row {
					width: 100%; 
				}
			}

			

			.list-container {
				border:dashed 1px var(--border-2);
				margin: 1rem auto;
				padding: 1rem;
				max-width: var(--max-width);
			}
			.list-container div {
    			padding: 0.2rem;
    		}
    		.list-container div a {
				display: flex;
				align-items: center;
    			justify-content: flex-start;
			}
			.list-container div a img {
				margin-right: 1rem ;
			}

			.hidden {
				display: none;
			}

            #phpinfo pre {margin: 0;}
            #phpinfo a:link {color: #009; text-decoration: none; background-color: #fff;}
            #phpinfo a:hover {text-decoration: underline;}
            #phpinfo table {border-collapse: collapse; border: 0; width: var(--max-width); box-shadow: 1px 2px 3px #ccc;}
            #phpinfo .center {text-align: center;}
            #phpinfo .center table {margin: 1em auto; text-align: left;}
            #phpinfo .center th {text-align: center !important;}
            #phpinfo td, th {border: 1px solid #666; vertical-align: baseline; padding: 4px 5px;}
            #phpinfo h1 {font-size: 150%;}
            #phpinfo h2 {font-size: 125%;}
            #phpinfo .p {text-align: left;}
            #phpinfo .e {background-color: #ccf; width: 300px; font-weight: bold;}
            #phpinfo .h {background-color: #99c; font-weight: bold;}
            #phpinfo .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
            #phpinfo .v i {color: #999;}
            #phpinfo img {float: right; border: 0;}
            #phpinfo hr {width: var(--max-width); background-color: #ccc; border: 0; height: 1px;}
			
		</style>
		<script>
			function togglePhpInfo() {
				var elt = document.querySelector('#phpinfo');
				elt.classList.toggle('hidden');
			}
		</script>
		
	</head>
	<body>
	
	
	<div class="table-container">
		<div class="flex-table row">	
			<div class="flex-row first">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFN0lEQVR4nNXYe0xTVxzA8eMEHcPEGebcpsyB3QYFBoUGykDbhSItAlahFF0rEEodtCJYJ/Ko1/K0kBYRRFCEyUbVZiColNdoEzogdEQcU3ROYJmGgTQZccwXj7NcXbEFkm1/efr96/55P/n9bu7JAeAVdl3s+PbdzHWnpwrsJp4U2SYDS0qf/KFjX4r9yFj2+ltThW/BJ8dXwZlS60hgCfUKnex6RZtu94vtr03mr4fzgJPWOoB63SkUm+4EYo9+HwH+mvGB/o/8954aAdOl1pMA9TrjSee6E4hQL9p01yB1eGBRAE2M915dPAnigMGDH7UYpI5jpis0fdJqGKBaxx4/F02s96MXAOcHoxnO3xuyHKH5N2BVD1BMxabYtHG33NDG+kAccG2fS9Xvmc7TiwBl1tEAxVqi6PJ23hb4HMAnjdxLJenHJERoDrCdgBXgDYBal9kM/xZOwKwR0J/oeeJ+GgkuBDwusj0KUEvNYKy8Eh58uyWKDnGAJsZbOyT2GVoCYIBlq9cA1GpgsbKuRgRDHNDG2zyt3+srHzlIgQsBDwvsEgBq1TM4mxq2sx4bAe28zRdvCrdcXwLQDzFgBVCrLoTT1MjaAXFAMydgShf7mfyX/TRoBpA6jk3mbSAA1DrP3MOsC+HAlwD62T4BvcsMkOmsN2Q5yB7mvkMEKKVis5dfCOINGAFXwoMn23cHFt0UBs7c2U+bGz5ImbuXRprDJzAhdTDAYsJKgFLKgLjoiwwenJ9AOLOiK5qhuSUMggtXaELqmANQqsJLYK2k84fmAdtZfzZFMBUDgtC/FgEyiROjuYS1AKVqaAlxSjofGgENrB2Vml1hzT8JwqA5wGNyPMNlK0ApCMCyGlri4EtA5LPG7SxFXwx7whzgM34vjdQ6nuHyKUCpKr/k0BpaIpwHbOMoWyIiGvpjI+GiCRz2kADUqvJLbjYHROZ37do9bA6gGkbElK/HMeIqgFKVvuKN1f7JsyYA7dXQz8/9wOVBU8CdJOrssJhyA6DWGUrqkWr/FGgEXAji5mgiYn5cCMBXaFjskwpQ6zTl0E0joDaA/1t9SIysJ4oPF0+A9mgoyWcdQKlSEkY4Q0mFJoDC1jCBbknAftoJgFrlXpIvTADPVIF703Q7hTMLAYPCoMdDSfT3AWqVkzOVJgBVE3NfnS5cBBdNIDEoHaBYuZfkvhHwDU0k/i70wNRCwIAgVKPFqOid+Su8jq0+RZbM4YAqv+Rh9dZUmSZMDM0BbP2gkGUHUErhpHhXTpHblLjleJaTJfD5BDan5LYw00ZNAXout/ZaLButAxseRsRWFLnILpa4ZwtfAA7NNgSkJ7UFp0Mc0LlT1N3DiWf28njk/mh2PEAxhWvhtlKPnKf/ADrU9Cx1KzP9UUeY+JJup7C4JyquS8/l9vUJQtC768GDAC4r9cj+GQdU+x5OUtOlM8YJPF8hTly9nhNjD1CsmFC8VsVWLS9xzz55iiyZukTLT1UHZsGXKyTs7OHw87TR0a8DFJNvkNscdy0oKHHPnjxFltQ2UmW9pgBduOjbTnYseh8vngqolhd+rIg47iorK/XI6TjrfTTuMvVYYxNdqmgNTk/ShhxwAiiHbayeX4syUp70EhV7s5F6TAQsLYyKWZ32lH2JP1/1z0fvXvPfOuFWQK8lF1OBpVblUZaupWLonW/+SyqiakWNZyUGLLWv3M4zz3tV04ClVuOmlOI/MmCJYQB77Zxr7RFgqVU61fvWfKJkAEut0rk+s5igRutKHPyPqpzq+K/6HUz7GzzFmu+MrtfhAAAAAElFTkSuQmCC">
				<div><?=apache_get_version(); ?></div>
			</div>
			<div class="flex-row" >
				<a href="/phpmyadmin" target="_blank">
					<img src="data:image/png;base64,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">
					<div>PhpMyAdmin</div>
				</a>
			</div>
			<div class="flex-row">
				<a href="#" onclick="togglePhpInfo()">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACr0lEQVR4nO2YW4hOURSAP8ZlMoxxmcitXEbzoIQHT7whqcGDUhMp4sl4xbvQoKSUF2Wmkbx6klIuDRomtwclSjE8zDTEuPQzW6vW0e445z/7/Gf//8zD/mo9nH3WXnutfVn7AoFAIBAIBAKB8cokYCWwEzgOXAXuA0+BN8AQ8EtlSMvk3z2gR+tI3RagrtbOzwP2AteBz4DxJCPALeAIsLhazk8F9gGPPTqeJX3aYVN8BDBTh3+ghgGYmEjbx4DGSoOQ3vhUwIFD1joa8RDQR6A9TwDTgWseGl6r9lZ7HqEeoCEriLk6N4s29h2YrDYPVGG6PQRmpwVRD/R6akjsRFyqQiBGU7j4/B9nHeZoEtLzrcAFYFR1z6foNgNrgK4KbJoE6YxXlA3pd0YgN9OGMqEzshblROBtTpsmQcTn5bbyOYehPG3pP9eynzrEs7S8VctltxfWW/W/AG2Wjb6cNk2KnLEDeekQSNTLMi9LsX9b9N8CYBiYoN+HY3odVpvvctg0ZUQ64B/fHAJZpbrrYuUlK4Ns1mNGRLQWItmg5fNz2jRl5GueQH7oxibst+bn69h6kEPjCev7Vcy5aVq+I6dN4xrIiwxlOWNlsQv4o04KTbGM88TSPZnTpikjz/Kk3ssJjcwAlgJbgSuW0wv1/6aYjYtW3ds5bRrXFLwiI/3K0RpdxMMOxl3Eh80SsCzeG51lKmxUnSWegvBl81TSfKzX211ShSinb/MYSFGbd/WelMgc4JFHZ6slvVZHpNLgkPLGUrqtNO5Eux7qzDiRAWA3FdKo18wPYxjAe+BokauujTwA7NH145Lbi8oo8EBnRXRB806z7rhdnp+D5Jh0AzgILKLG1Olmul2noCzEO0C/PsYNWg90g1rWrzrdOmXa1EbNH+gCgUAgEAgEAjjxF3HmGw0EdlOUAAAAAElFTkSuQmCC">
					<div><?=phpversion(); ?></div>
				</a>
			</div>		
		</div>

		<div  id="phpinfo" class="hidden"><?=embedded_phpinfo();?></div>
		
		<div class="list-container">
	    <?php
	        $list_ignore = array ('.','..','exemples');
	        $handle=opendir(".");

	        while ($file = readdir($handle)) {
	            if (is_dir($file) && !in_array($file,$list_ignore)) {
	                echo '<div><a href="'.$file.'"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAW0lEQVR4nGNgoBR8ahL8jw1/bBTooMiAT8Qa8gmPAUQZ8omAAbgwbQz4v0yPZMxANQO+dkuSbsBS3f1wA/7MVSPdgOX6DgwU2Q4LxD/k2g4CXymxHQQosn1QAACw4dH3zBtqmQAAAABJRU5ErkJggg=="> '.$file.'</a></div>';
	            }
	        }
	        closedir($handle);
	    ?>
		</div>
	</div>

	
	</body>
</html>

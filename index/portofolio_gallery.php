<?php
$filterEffect = (isset($_GET['filterEffect'])) ? $_GET['filterEffect'] : 'popup';
$hoverDirection = (isset($_GET['hoverDirection'])) ? (bool)$_GET['hoverDirection'] : true;
$hoverInverse = (isset($_GET['hoverInverse'])) ? (bool)$_GET['hoverInverse'] : false;
$hoverDelay = (isset($_GET['hoverDelay'])) ? intval($_GET['hoverDelay']) : 0;
$expandingSpeed = (isset($_GET['expandingSpeed'])) ? intval($_GET['expandingSpeed']) : 500;
?>
<div id="elastic_grid"></div>
<script type="text/javascript">
	$(function(){
        $("#elastic_grid").elastic_grid({
        	'filterEffect': '<?php echo $filterEffect;?>', // moveup, scaleup, fallperspective, fly, flip, helix , popup
        	'hoverDirection': '<?php echo $hoverDirection;?>',
        	'hoverDelay': <?php echo $hoverDelay;?>,
        	'hoverInverse': '<?php echo $hoverInverse;?>',
            'expandingSpeed': <?php echo $expandingSpeed;?>,
            'expandingHeight': 500,
        	'items' :
        	[
        		{
        			'title' 		: 'Event Management',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.',
        			'thumbnail' 	: ['images/large_new/1_2.jpg'],
        			'large' 		: ['images/large_new/1.jpg'],
        			'button_list' 	:
        			[
        				
        			],
        			'tags' 			: ['Web App']
        		},
        		{
        			'title' 		: 'Amanah Fashion',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/2_2.jpg'],
        			'large' 		: ['images/large_new/2.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Read more', 'url' : 'http://porfolio.bonchen.net/' }
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Badan Penanaman Modal Jawa Timur',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/3_2.jpg'],
        			'large' 		: ['images/large_new/3.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Truck Management Maspion Industri',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/10_2.jpg'],
        			'large' 		: ['images/large_new/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web App']
        		},
        		{
        			'title' 		: 'Internet Taqwa',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/5_2.jpg'],
        			'large' 		: ['images/large_new/5.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Purchase Order Inventory Online',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/6_2.jpg'],
        			'large' 		: ['images/large_new/6.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web App']
        		},
        		{
        			'title' 		: 'Ponpes Assalafi Al-Fitrah',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/7_2.jpg'],
        			'large' 		: ['images/large_new/7.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web App']
        		},
        		{
        			'title' 		: 'Sinpas PD Pasar Surabaya',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/8_2.jpg'],
        			'large' 		: ['images/large_new/8.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web App']
        		},
        		{
        			'title' 		: 'Sapar Website',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/9_2.jpg'],
        			'large' 		: ['images/large_new/9.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Elkabumi Caraka Daya',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/4_2.jpg'],
        			'large' 		: ['images/large_new/4.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Wimbi Online Shop',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/11_2.jpg'],
        			'large' 		: ['images/large_new/11.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web App']
        		},
        		{
        			'title' 		: 'Agenda Kota',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/12_2.jpg'],
        			'large' 		: ['images/large_new/12.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Daun Pandan',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/13_2.jpg'],
        			'large' 		: ['images/large_new/13.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Dashboard PD Pasar Surabaya',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/14_2.jpg'],
        			'large' 		: ['images/large_new/14.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		},
        		{
        			'title' 		: 'Pacific Engineering',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/large_new/15_2.jpg'],
        			'large' 		: ['images/large_new/15.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Web Design']
        		}

        	]
        });
    });
</script>
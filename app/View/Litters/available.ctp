<h2>Available Puppies</h2>
<div class="row-fluid">

	<p><b>New litter!</b></p>
	<p>Zoe and Budro now have 6 babies born Saturday, March 22!  There are 2 boys and 4 girls.  All puppies have forever homes but you are welcome to get on the list for the next litter.</p>
	<p>You may call or email any time with questions:</p>
	<p><a href="mailto:&#118;&#097;&#108;&#108;&#101;&#121;&#100;&#111;&#111;&#100;&#108;&#101;&#115;&#064;&#111;&#117;&#116;&#108;&#111;&#111;&#107;&#046;&#099;&#111;&#109;">&#118;&#097;&#108;&#108;&#101;&#121;&#100;&#111;&#111;&#100;&#108;&#101;&#115;&#064;&#111;&#117;&#116;&#108;&#111;&#111;&#107;&#046;&#099;&#111;&#109;</a></br>
		Phone:  417-771-8078<br />
		You are welcome to call to ask questions.  Email is the best form of communication when we have puppies.  It allows me to respond to everyone once a day so I can spend more time giving attention to puppies and mom.</p>
	<h4>The images below are from Zoe and Budro's previous litter.</h4>

	<img src="<?php echo $this->webroot; ?>img/puppies/2/group3.jpg" />
	<p class="age">Zoe X Budro puppies at 3 weeks old</p>
	<p>All puppies from this litter have forever homes.  These pictures will remain up for you to see how a litter is posted until new puppies arrive. </p>

	<p>A deposit can be put down for a future litter to reserve your spot in line to choose your puppy. </p>

	<p><a href="http://www.facebook.com/media/set/?set=a.10150663240563999.399882.255975753998&type=3" target="_blank">There are 22 pictures of a previous litter with a tan and cream puppy at this link for Salt and Light Photography.</a></p>

</div>
<div class="row-fluid">
	<img class="span6" src="<?php echo $this->webroot; ?>img/puppies/2/girls3.jpg" />
	<img class="span6" src="<?php echo $this->webroot; ?>img/puppies/2/girls4.jpg" />
	<p class="age span12">Girls at 4 weeks old</p>
</div>

<div class="row-fluid">
	<img class="span6" src="<?php echo $this->webroot; ?>img/puppies/2/boys2.jpg" />
	<img class="span6" src="<?php echo $this->webroot; ?>img/puppies/2/boys1.jpg" />
	<p class="age span12">Boys at 3 weeks old</p>

</div>

<hr />

</div>

<?php foreach($litters as $litter): ?>
	<?php echo $this->element('litter_item', array('litter'=>$litter)); ?>
<?php endforeach; ?>

	<div class="row-fluid bottom-border"><a href="#top">Back to Top</a></div>

<?php //echo $this->element('sql_dump'); ?>
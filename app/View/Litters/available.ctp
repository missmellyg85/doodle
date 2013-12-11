<h2>Available Puppies</h2>
<div class="row-fluid">
	
	<p><b>Available Adults:</b></p>

	<p>Jade is now available for adoption as a family pet.  She is an AKC American Golden Retriever, 8 years old.<br>
	Jade has had two litters in the past but has not been pregnant for about 3 years.  She is very gentle and affectionate with people and has a good prey drive from her hunting retriever side.  She is very motivated by food and is easy to train using treats.  She does not jump up on people, will sit to be pet and loves a belly rub.<br> 
	Price is $300 for Jade or none if you would rather take her for her vet exam yourself.<br>
	If you are that special someone wanting a beautiful Retriever, please email me:  <a href="mailto:&#118;&#097;&#108;&#108;&#101;&#121;&#100;&#111;&#111;&#100;&#108;&#101;&#115;&#064;&#111;&#117;&#116;&#108;&#111;&#111;&#107;&#046;&#099;&#111;&#109;">&#118;&#097;&#108;&#108;&#101;&#121;&#100;&#111;&#111;&#100;&#108;&#101;&#115;&#064;&#111;&#117;&#116;&#108;&#111;&#111;&#107;&#046;&#099;&#111;&#109;</a>  or call:  417-771-8078</p>

	<p>Reuben is available for adoption.  He is a rare chocolate pure bred Poodle, is super friendly and affectionate.  I will not be using him for Goldendoodle babies because the chocolate gene must be in both parents to come out in the puppies.  When bred with a Golden Retriever we got mostly black puppies and we were wanting a spectrum of golden colors.  He would be wonderful to use for breeding and/or to have as a family pet.  $500</p>

	<p>See Bridgette's and Reuben's pictures on our 'Parents' page.</p>

	<p><b>Upcoming litters:</b></p>
	<p>Zoe will be bred with Budro for spring babies ready to go home around April or May.  These puppies will be F1b miniature Goldendoodles (1/4 Golden Retriever, 3/4 Poodle).  Their adult weight will average 20-25 lbs.  They are very much like the 50/50 Goldendoodles except they will be a little smaller, have more curl/wave (not tight curls like the Poodle) and be completely non-shedding.</p>
	<p>We will know without a doubt there is a pregnancy a week before puppies are due when the mother's milk begins to fill in. We won't know how many or what gender until their birthday.</p>
	<p>A deposit can be sent anytime to reserve your spot in line to choose your puppy. If there is not a pregnancy or not enough puppies available, your deposit can be returned.</p>
	<p>You may call or email any time with questions:</p>
	<p><a href="mailto:&#118;&#097;&#108;&#108;&#101;&#121;&#100;&#111;&#111;&#100;&#108;&#101;&#115;&#064;&#111;&#117;&#116;&#108;&#111;&#111;&#107;&#046;&#099;&#111;&#109;">&#118;&#097;&#108;&#108;&#101;&#121;&#100;&#111;&#111;&#100;&#108;&#101;&#115;&#064;&#111;&#117;&#116;&#108;&#111;&#111;&#107;&#046;&#099;&#111;&#109;</a></br>
		Phone:  417-771-8078<br />
		You are welcome to call to ask questions.  Email is the best form of communication when we have puppies.  It allows me to respond to everyone once a day so I can spend more time giving attention to puppies and mom.</p>

	<img class="span12" src="<?php echo $this->webroot; ?>img/puppies/2/group3.jpg" />
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
<?php include "includes/header.php"?>


<!-- START LEFT COL -->

<div>
	<h1 class="h1al">How It Works</h1>
		<p id="pmar">Though it may seem like magic at first, the Slightly Robot Bracelet is actually a pretty simple device. You can think of the bracelet as a hand orientation sensor that is programmed to vibrate whenever your hand goes somewhere it shouldn’t, whether this is near your mouth, hair, or somewhere on your skin. Your phone connects to the device using wireless Bluetooth in order to set it up, control it, process the data, and display this data back to you.</p>
		<br/>
		<p id="pmar">The Slightly Robot Bracelet is based around a tiny device called an accelerometer. The accelerometer measures the bracelet’s orientation with respect to gravity, and by proxy, your hand’s position. As its name implies, the accelerometer also measures acceleration, but we don’t really use this data and run some fancy algorithms to keep it from affecting your bracelet’s accuracy too much. Though it may seem like it should intuitively, the bracelet does not detect movements or gestures themselves.</p>
	<section>
		<p id="pmar">Unless you’re an octopus, your arm should only bend in a few places. This means that there are only so many different positions that your hand can be in. Therefore, by measuring the angle of your hand with respect to gravity, the accelerometer can determine where your hand is with a fairly high degree of precision, especially for positions near your head and face.</p>
		<p id="pmar">What the bracelet doesn’t know yet is which behaviors, and therefore which positions, you are trying to learn to avoid. To do this, you first pair the bracelet to your phone over Bluetooth using our app. Then, place your hand in the problematic position and press the Add Calibration button. This saves the bracelet orientation as a calibration. You can add as many of these as is necessary for your habit, like one for each finger or hair on your head! You can adjust the sensitivity of each calibration position individually. Broadening the calibration radius will have it trigger in a wider range of positions while narrowing it will do the opposite.</p>
	</section>
<!-- END LEFT COL -->
	<aside>
		<img src="images/orientation_300x300.gif">
	</aside>
		<p id="pmar">&nbsp;</p>
		<p id="pmar">The bracelet will register an event only when all of the following conditions are met simultaneously</p>
		<ul id="pmar">
		<li>The bracelet’s current orientation is within the sensitivity range of any calibration position.</li>
		<li>The bracelet has been in this position for more than the trigger time set in the settings menu.</li>
		<li>The bracelet is not asleep.</li>
		</ul>
		<p id="pmar">Two things happen when the bracelet registers an event. First, the bracelet vibrates. The first vibration is a warning. For each vibration after the first, an event is logged in the phone. These events can be viewed according to time of day and day of week. You can delete events by tapping on them in the "Recent Logs" tab. That’s what the bracelet can do. The rest is up to you.</p>

</div>

<?php include "includes/footer.php"?>
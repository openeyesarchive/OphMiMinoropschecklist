<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>
<style type="text/css">
	td { font-size: 18px; }
</style>

<div>
	<table cellspacing="0" width="1000">
		<tbody>
			<tr>
				<td align="left" width="20%"><?php echo CHtml::image(Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('OphMiPatienteducation.assets')).'/img/logo1.jpg'); ?></td>
				<td align="left" width="45%"><h1 style="margin-top:40px;">Minor ops checklist</h1></td>
				<td align="left" width="30%" style="border: 1px solid gray;">
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">ORBIS# <?php echo $this->patient->hos_num?></p>
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">Program:</p>
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">Last Name: <?php echo $this->patient->last_name?></p>
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">First Name: <?php echo $this->patient->first_name?></p>
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">Date of Birth: <?php echo $this->patient->NHSDate('dob')?></p>
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">Procedure Date:</p>
					<p style="padding:3px; margin-left:10px; margin-bottom:0px;">Surgeon:</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<?php $this->renderDefaultElements($this->action->id); ?>

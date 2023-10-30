#
# Table structure for table 'tx_fpfractionslider_domain_model_slide'
#
CREATE TABLE tx_fpfractionslider_domain_model_slide (

	title varchar(255) DEFAULT '' NOT NULL,
	subtitle text NOT NULL,
	background int(11) unsigned NOT NULL default '0',
	color varchar(255) DEFAULT '' NOT NULL,
	datain int(11) DEFAULT '0' NOT NULL,
	elements int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_fraceffect'
#
CREATE TABLE tx_fpfractionslider_domain_model_fraceffect (

	part int(11) unsigned DEFAULT '0' NOT NULL,

	dataposition varchar(255) DEFAULT '' NOT NULL,
	datain int(11) DEFAULT '0' NOT NULL,
	dataout int(11) DEFAULT '0' NOT NULL,
	dataeasein varchar(255) DEFAULT '' NOT NULL,
	dataeaseout varchar(255) DEFAULT '' NOT NULL,
	datadelay varchar(255) DEFAULT '' NOT NULL,
	datatime varchar(255) DEFAULT '' NOT NULL,
	datastep varchar(255) DEFAULT '' NOT NULL,
	dataspecial int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_cssclass'
#
CREATE TABLE tx_fpfractionslider_domain_model_cssclass (

	name varchar(255) DEFAULT '' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_proeffect'
#
CREATE TABLE tx_fpfractionslider_domain_model_proeffect (

	part int(11) unsigned DEFAULT '0' NOT NULL,

	datawidth varchar(255) DEFAULT '' NOT NULL,
	dataheight varchar(255) DEFAULT '' NOT NULL,
	datadepth varchar(255) DEFAULT '' NOT NULL,
	dataposition int(11) DEFAULT '0' NOT NULL,
	datahorizontal varchar(255) DEFAULT '' NOT NULL,
	datavertical varchar(255) DEFAULT '' NOT NULL,
	datashowtransition int(11) DEFAULT '0' NOT NULL,
	datashowoffset varchar(255) DEFAULT '' NOT NULL,
	datashowduration varchar(255) DEFAULT '' NOT NULL,
	datashowdelay varchar(255) DEFAULT '' NOT NULL,
	datahidetransition int(11) DEFAULT '0' NOT NULL,
	datahideoffset varchar(255) DEFAULT '' NOT NULL,
	datahideduration varchar(255) DEFAULT '' NOT NULL,
	datahidedelay varchar(255) DEFAULT '' NOT NULL,
	datastayduration varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_reveffect'
#
CREATE TABLE tx_fpfractionslider_domain_model_reveffect (

	part int(11) unsigned DEFAULT '0' NOT NULL,

	datax varchar(255) DEFAULT '' NOT NULL,
	datay varchar(255) DEFAULT '' NOT NULL,
	datastart varchar(255) DEFAULT '' NOT NULL,
	datawhitespace int(11) DEFAULT '0' NOT NULL,
	datawidth varchar(255) DEFAULT '' NOT NULL,
	dataheight varchar(255) DEFAULT '' NOT NULL,
	datahoffset varchar(255) DEFAULT '' NOT NULL,
	datavoffset varchar(255) DEFAULT '' NOT NULL,
	dataresponsiveoffset int(11) DEFAULT '0' NOT NULL,
	databasealign int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_part'
#
CREATE TABLE tx_fpfractionslider_domain_model_part (

	slide int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	subtitle text NOT NULL,
	linktitle varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	cettcontent int(11) unsigned NOT NULL default '0',
	cssstyles varchar(255) DEFAULT '' NOT NULL,
	cssclass int(11) unsigned DEFAULT '0',
	fraction int(11) unsigned DEFAULT '0' NOT NULL,
	pro int(11) unsigned DEFAULT '0' NOT NULL,
	revolution int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_part'
#
CREATE TABLE tx_fpfractionslider_domain_model_part (

	slide int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_fraceffect'
#
CREATE TABLE tx_fpfractionslider_domain_model_fraceffect (

	part int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_proeffect'
#
CREATE TABLE tx_fpfractionslider_domain_model_proeffect (

	part int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_fpfractionslider_domain_model_reveffect'
#
CREATE TABLE tx_fpfractionslider_domain_model_reveffect (

	part int(11) unsigned DEFAULT '0' NOT NULL,

);

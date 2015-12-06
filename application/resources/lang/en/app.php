<?php

return [

	"page" => [
		"title" 		=> "BoNeMEAL &ndash; Ban-Management WebApp",
		"description"	=> "BoNeMEAL (the ban management web application) makes it easy to manage your server's bans, mutes, kicks and warnings.",
	],

	"choice" => [
		"player"		=> "player|players",
		"ban" 			=> "ban|bans",
		"mute" 			=> "mute|mutes",
		"kick" 			=> "kick|kicks",
		"warning" 		=> "warning|warnings",
		"note"			=> "note|notes",
		"ipBan"			=> "IP ban|IP bans",
		"server"		=> "server|servers",
		"activeBan"		=> "active ban|active bans",
		"activeMute"	=> "active mute|active mutes",
		"newAccount"	=> "new user account|new user accounts",
		"totalServer"	=> "total server|total servers",
		"normalPlayer"	=> "normal player|normal players",
		"bannedPlayer"	=> "banned player|banned players",
		"mutedPlayer"	=> "muted player|muted players",
	],

	"table" => [
		"id"			=> "Id",
		"email"			=> "E-Mail",
		"name"			=> "Username",
		"role"			=> "Role",
		"created"		=> "Created",
		"player"		=> "Player",
		"uuid"			=> "UUID",
		"ip"			=> "IP",
		"lastSeen"		=> "Last seen",
		"server"		=> "Server",
		"reason"		=> "Reason",
		"actor"			=> "Actor",
		"expires"		=> "Expires",
		"db_host"		=> "Database Host",
		"db_username"	=> "Database User",
		"db_database"	=> "Database Name",
	],

	"role" => [
		"role"				=> "Role",
		"superuser" 		=> "Superuser",
		"normalUser" 		=> "Normal User",
		"moderator" 		=> "Moderator",
		"admin" 		    => "Admin",
	],

	"bonemeal"					=> "BoNeMEAL",
	"home"						=> "Home",
	"login"						=> "Login",
	"logout"					=> "Logout",
	"register"					=> "Sign up",
	"toggleNav"					=> "Toggle Navigation",
	"whoops"					=> "Whoops!",
	"inputErrors"				=> "There were some problems with your input.",
	"username"					=> "Username",
	"email"						=> "E-Mail Address",
	"password"					=> "Password",
	"confirmPassword"			=> "Confirm Password",
	"newPassword"					=> "New Password",
	"forgotPassword"			=> "Forgot password",
	"resetPassword"				=> "Reset password",
	"sendPasswordResetLink"		=> "Send password reset link",
	"signupForMod"				=> "Are you a moderator or admin on this network? Signup to manage bans, kicks, mutes and warnings with BoNeMEAL.",
	"adminMustEnableAccount" 	=> "An admin has to enable your account before you can access it.",
	"createAccount"				=> "Create account",
	"loginToAdmin"				=> "Login to manage bans, kicks, mutes and warnings with BoNeMEAL.",
	"notice"					=> "Notice",
	"error"						=> "Error",
	"warning"					=> "Warning",
	"about"						=> "About",
	"aboutUs"					=> "About: BoNeMEAL",
	"aboutUsLead"				=> "Managing a server is hard. Punishing players for misbehaviour shouldn't be.",
	"aboutUsText"				=> "The ban management web app (BoNeMEAL) makes it easy to manage your server's bans, mutes, kicks and warnings. 
									It's designed to extend the <a href=\"http://dev.bukkit.org/bukkit-plugins/ban-management/\">Ban Management</a> Bukkit plugin created by confuserr by providing a clean, easy and responsive way to manage your bans - even across different servers.
									The combination of the Ban-Management plugin together with BoNeMEAL is the best way of banning, kicking, muting and warning players for server netwoks of any scale.",
	"learnMore"					=> "Learn more",
	"noPermission"				=> "You have no permission to access that page.",
	"insufficientPermission"	=> "You have insufficient permissions to do that.",
	"causedTroubleQuestion"		=> "Caused trouble?",
	"enterPlayerName"			=> "Enter your player name...",
	"check"						=> "Check",
	"playerNotFound"			=> "A player with that name does not exist...",
	"reason"					=> "Reason",
	"expires"					=> "expires",
	"expired"					=> "expired",
	"noExpire"					=> "Will not expire (permanent).",
	"banned"					=> "banned",
	"unbanned"					=> "unbanned",
	"muted"						=> "muted",
	"unmuted"					=> "unmuted",
	"warned"					=> "warned",
	"kicked"					=> "kicked",
	"noteAdded"					=> "note added",
	"unbannedBy"				=> "Unbanned :time by :actor.",
	"lastedFor"					=> "Lasted for :duration.",
	"unmutedBy"					=> "Unmuted :time by :actor.",
	"onServer"					=> "on :server",

	"noJs"						=> "Javascript is deactivated!",
	"noJsText"					=> "Please activate Javascript in your browser and refresh this page.",

	"dashboard"					=> "Dashboard",
	"configuration"				=> "Configuration",
	"searchPlayer"				=> "Search player...",
	"players"					=> "Players",
	"player"					=> "Player",
	"activePunishments"			=> "Active punishments",
	"activeBans"				=> "Active bans",
	"activeMutes"				=> "Active mutes",
	"app"						=> "Application",
	"noData"					=> "No data.",
	"adminPanel"				=> "Admin",
	"punish"					=> "Punish",
	"punishPlayer"				=> "Punish player",
	"banPlayer"					=> "Ban player",
	"mutePlayer"				=> "Mute player",
	"warnPlayer"				=> "Warn player",
	"addNotePlayer"				=> "Add note to player",
	"delete"					=> "delete",
	"remove"					=> "remove",
	"servers"					=> "Servers",
	"addServer"					=> "Add server",
	"editServer"				=> "Edit server",
	"saveServer"				=> "Save server",
	"serverName"				=> "Server name",
	"createdServer"				=> "Server successfully added.",
	"updatedServer"				=> "Server successfully updated.",
	"removedServer"				=> "Server successfully removed.",
	"error404Title"				=> "Oops, Error 404!",
	"error404Text"				=> "Sorry, the requested page could not be found.",
	"error401Title"				=> "Oops, Error 401!",
	"error401Text"				=> "Unauthorized.",
	"footerNotice"				=> "This site is not affiliated with Minecraft or Mojang.",
	"users"						=> "Users",
	"rememberMe"				=> "Remember me",
	"performanceNote"			=> "The more servers you will add, the longer it will take to query them all - thus performance may drop.",
	"currentlyNotPunished"		=> "Currently not banned or muted.",
	"currentlyBanned"			=> "Currently banned",
	"currentlyMuted"			=> "Currently muted",
	"updateCheck"				=> "Update Check",
	"details"					=> "Details",
	"viewDetails"				=> "View details",
	"notifications"				=> "Notifications",
	"loading"					=> "Loading",
	"recentPastBans"			=> "Recently unbanned",
	"recentPastMutes"			=> "Recently unmuted",
	"recentKicks"				=> "Recent kicks",
	"recentWarnings"			=> "Recent warnings",
	"recentNotes"				=> "Recent notes",
	"leaveEmptyForPermanent"	=> "Leave this field empty for a permanent punishment.",
	"expires"					=> "Expires on",
	"server"					=> "Server",
	"save"						=> "Save",
	"suggestion"				=> "Suggestion",
	"newBan"					=> "New ban",
	"newMute"					=> "New mute",
	"newWarning"				=> "New warning",
	"newNote"					=> "New note",
	"newKick"					=> "New kick",
	"editBan"					=> "Edit ban",
	"editNote"					=> "Edit note",
	"editMute"					=> "Edit mute",
	"editWarning"				=> "Edit warning",
	"flushCache"				=> "Flush cache",
	"clearedCache"				=> "Cache successfully cleared.",
	"message"					=> "Message",
	"dbNotConnect"				=> "Can not connect to database.",
	"missingDbTables"			=> "Can not find Ban-Management tables in this database. Are you sure your database prefix is correct?",
	"toggleDetails"				=> "Toggle details",
	"toggleAllTimelineItems"	=> "Toggle all",
	"followingServersOutdated"	=> "We have found some outdated servers. We assume you did not run the Ban-Management plugin for quite a while, since there are active temp bans which shoud have expired by now. The following servers are outdated:",
	"edit"						=> "Edit",
	"playerNotExist"			=> "A player with that name does not exist.",
	"activity"					=> "Activity",
	"onlinePlayers"				=> "Online players",
	"playerSplit"				=> "Player split",
	"punishmentSplit"			=> "Punishment type split",
	"goToHome"					=> "Go to homepage",
	"statistics"				=> "Statistics",
	"generalStats"				=> "General stats",
	"serverStats"				=> "Server stats",
	"frontTitle"				=> "Am I being detained?!",
	"frontText"					=> "With BoNeMEAL you can check your punishments, when and why you got them and when they will expire.",
	"removedMuteRecord"			=> "Successfully removed mute record.",
	"removedBanRecord"			=> "Successfully removed ban record.",
	"removedKick"				=> "Successfully removed kick record.",
	"removedBan"				=> "Successfully removed ban.",
	"removedMute"				=> "Successfully removed mute.",
	"removedWarning"			=> "Successfully removed warning.",
	"removedNote"				=> "Successfully removed note.",
	"removedUser"				=> "Successfully deleted user.",
	"canNotEditSuperuser"		=> "You can not edit a superuser.",
	"user"						=> "User",
	"editUser"					=> "Edit user",
	"dangerZone"				=> "Danger Zone",
	"dangerZoneDesc"			=> "Changing anything in here may lock the user out of their account.",
	"addUser"					=> "To add a new user, tell them to signup for an account at <a href=\":url\">:url</a>.",
	"ok"						=> "Okay",
	"bannedPlayer"				=> "Successfully banned player.",
	"mutedPlayer"				=> "Successfully muted player.",
	"warnedPlayer"				=> "Successfully warned player.",
	"notedPlayer"				=> "Successfully attached note to player.",
	"updatedBan"				=> "Updated ban successfully.",
	"updatedMute"				=> "Updated mute successfully.",
	"updatedNote"				=> "Updated note successfully.",
	"updatedWarning"			=> "Updated warning successfully.",
	"settings"					=> "Settings",
	"savedSettings"				=> "Your settings have been saved.",
	"addServerFirst"			=> "Please add your first server before you start working with BoNeMEAL.",


	// A lot of time has been put into this app - and still it's completely free. Please give us some credit and leave this copyright notice in return. Thanks.
	"copyright"					=> "BoNeMEAL",

];

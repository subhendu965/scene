<?php
//checking if some ine access directly or not
include "init_protect.php";


    $os_list[] = array('Windows XP', 'Windows XP');
    $os_list[] = array('(Windows NT 5.1|Windows NT5.1)', 'Windows XP');
    $os_list[] = array('Windows 2000', 'Windows 2000');
    $os_list[] = array('Windows NT 5.0', 'Windows 2000');
    $os_list[] = array('Windows NT 4.0|WinNT4.0', 'Windows NT');
    $os_list[] = array('Windows NT 5.2', 'Windows Server 2003');
    $os_list[] = array('Windows NT 6.0', 'Windows Vista');
    $os_list[] = array('Windows NT 7.0', 'Windows 7');
    $os_list[] = array('Windows CE', 'Windows CE');
    $os_list[] = array('(media center pc).([0-9]{1,2}\.[0-9]{1,2})', 'Windows Media Center');
    $os_list[] = array('(win)([0-9]{1,2}\.[0-9x]{1,2})', 'Windows');
    $os_list[] = array('(win)([0-9]{2})', 'Windows');
    $os_list[] = array('(windows)([0-9x]{2})', 'Windows');
    // Doesn't seem like these are necessary...not totally sure though..
    //$os_list[] = array('(winnt)([0-9]{1,2}\.[0-9]{1,2}){0,1}', 'Windows NT');
    //$os_list[] = array('(windows nt)(([0-9]{1,2}\.[0-9]{1,2}){0,1})', 'Windows NT'); // fix by bg
    $os_list[] = array('Windows ME', 'Windows ME');
    $os_list[] = array('Win 9x 4.90', 'Windows ME');
    $os_list[] = array('Windows 98|Win98', 'Windows 98');
    $os_list[] = array('Windows 95', 'Windows 95');
    $os_list[] = array('(windows)([0-9]{1,2}\.[0-9]{1,2})', 'Windows');
    $os_list[] = array('win32', 'Windows');
    $os_list[] = array('(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})', 'Java');
    $os_list[] = array('(Solaris)([0-9]{1,2}\.[0-9x]{1,2}){0,1}', 'Solaris');
    $os_list[] = array('dos x86', 'DOS');
    $os_list[] = array('unix', 'Unix');
    $os_list[] = array('Mac OS X', 'Mac OS X');
    $os_list[] = array('Mac_PowerPC', 'Macintosh PowerPC');
    $os_list[] = array('(mac|Macintosh)', 'Mac OS');
    $os_list[] = array('(sunos)([0-9]{1,2}\.[0-9]{1,2}){0,1}', 'SunOS');
    $os_list[] = array('(beos)([0-9]{1,2}\.[0-9]{1,2}){0,1}', 'BeOS');
    $os_list[] = array('(risc os)([0-9]{1,2}\.[0-9]{1,2})', 'RISC OS');
    $os_list[] = array('os\/2', 'OS/2');
    $os_list[] = array('freebsd', 'FreeBSD');
    $os_list[] = array('openbsd', 'OpenBSD');
    $os_list[] = array('netbsd', 'NetBSD');
    $os_list[] = array('irix', 'IRIX');
    $os_list[] = array('plan9', 'Plan9');
    $os_list[] = array('osf', 'OSF');
    $os_list[] = array('aix', 'AIX');
    $os_list[] = array('GNU Hurd', 'GNU Hurd');
    $os_list[] = array('(fedora)', 'Linux - Fedora');
    $os_list[] = array('(kubuntu)', 'Linux - Kubuntu');
    $os_list[] = array('(ubuntu)', 'Linux - Ubuntu');
    $os_list[] = array('(debian)', 'Linux - Debian');
    $os_list[] = array('(CentOS)', 'Linux - CentOS');
    $os_list[] = array('(Mandriva).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)', 'Linux - Mandriva');
    $os_list[] = array('(SUSE).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)', 'Linux - SUSE');
    $os_list[] = array('(Dropline)', 'Linux - Slackware (Dropline GNOME)');
    $os_list[] = array('(ASPLinux)', 'Linux - ASPLinux');
    $os_list[] = array('(Red Hat)', 'Linux - Red Hat');
    // Loads of Linux machines will be detected as unix.
    // Actually, all of the linux machines I've checked have the 'X11' in the User Agent.
    //$os_list[] = array('X11', 'Unix');
    $os_list[] = array('(linux)', 'Linux');
    $os_list[] = array('(amigaos)([0-9]{1,2}\.[0-9]{1,2})', 'AmigaOS');
    $os_list[] = array('amiga-aweb', 'AmigaOS');
    $os_list[] = array('amiga', 'Amiga');
    $os_list[] = array('AvantGo', 'PalmOS');
    //$os_list[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1}-([0-9]{1,2}) i([0-9]{1})86){1}', 'Linux');
    //$os_list[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1} i([0-9]{1}86)){1}', 'Linux');
    //$os_list[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1})', 'Linux');
    $os_list[] = array('([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3})', 'Linux');
    $os_list[] = array('(webtv)\/([0-9]{1,2}\.[0-9]{1,2})', 'WebTV');
    $os_list[] = array('Dreamcast', 'Dreamcast OS');
    $os_list[] = array('GetRight', 'Windows');
    $os_list[] = array('go!zilla', 'Windows');
    $os_list[] = array('gozilla', 'Windows');
    $os_list[] = array('gulliver', 'Windows');
    $os_list[] = array('ia archiver', 'Windows');
    $os_list[] = array('NetPositive', 'Windows');
    $os_list[] = array('mass downloader', 'Windows');
    $os_list[] = array('micos_listoft', 'Windows');
    $os_list[] = array('offline explorer', 'Windows');
    $os_list[] = array('teleport', 'Windows');
    $os_list[] = array('web downloader', 'Windows');
    $os_list[] = array('webcapture', 'Windows');
    $os_list[] = array('webcollage', 'Windows');
    $os_list[] = array('webcopier', 'Windows');
    $os_list[] = array('webstripper', 'Windows');
    $os_list[] = array('webzip', 'Windows');
    $os_list[] = array('wget', 'Windows');
    $os_list[] = array('Java', 'Unknown');
    $os_list[] = array('flashget', 'Windows');
    $os_list[] = array('MS FrontPage', 'Windows');
    $os_list[] = array('(msproxy)\/([0-9]{1,2}.[0-9]{1,2})', 'Windows');
    $os_list[] = array('(msie)([0-9]{1,2}.[0-9]{1,2})', 'Windows');
    $os_list[] = array('libwww-perl', 'Unix');
    $os_list[] = array('UP.Browser', 'Windows CE');
    $os_list[] = array('NetAnts', 'Windows');
    
    foreach($os_list as $os_one){
    	if(preg_match('/'.$os_one[0].'/i',$_SERVER['HTTP_USER_AGENT'])){
    		$hb_user_os=$os_one[1];
    		break;    		
    	}else{
    		$hb_user_os="unknown";
    	}
    	
    }
    


?>

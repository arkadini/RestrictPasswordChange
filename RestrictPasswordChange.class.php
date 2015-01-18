<?php

class RestrictPasswordChange {
    public static function onAbortChangePassword ($user, $oldpass, $newpass, $abortMsg) {
        global $wgRestrictPasswordChangeUsers;

        if (in_array($user->mName, $wgRestrictPasswordChangeUsers)) {
            $abortMsg = 'resetpass_forbidden';
            return false;
        }

        return true;
    }
}

# WordPress Filter: ```ssa/notifications/email/args```
## Description:
Modify the email headers for Simply Schedule Appointments (SSA) notifications. This filter updates the Content-Type header to ensure emails are sent as HTML instead of plain text.

## Return:
If the filter applies, it updates the Content-Type to text/html; charset=UTF-8. Otherwise, it returns the original headers without modification.

# ProcessAssetsBackups - Assets/Files Backup Module for ProcessWire

This module provides an admin interface for the following assets/files backup functions:

* Creating new backups in ZIP format
* Uploading previously created backups
* Restoring backups to site/assets/files
* Providing info on existing backups
* Managing existing backups (downloading, deleting, etc.)

Requires ProcessWire 3.0.62 or newer.

## Known Issues:

* Restore does not work reliably with large files on Windows when Avira
  Antivirus real-time protection is activated. Consider adding an exception for
  sites/assets in your dev environment or deactivate real-time protection while
  restoring.
* Created ZIP-files cannot be opened with Windows explorer due to `./` path prefix
* Backup descriptions are not implemented yet
* Until this module can do anything fancier than plain file uploads, web server and PHP must be configured for apropriate upload filesize limits.

## License and Copyright

MPL 2.0, see `LICENSE`

Copyright 2019 by Michael Jaros

UI parts of the code have been reused with only small adaptations from Ryan Cramer's `ProcessDatabaseBackups` module.

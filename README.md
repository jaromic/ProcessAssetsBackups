# ProcessAssetsBackups - Assets/Files Backup Module for ProcessWire

This module provides an admin interface for the following assets/files backup functions:

* Creating new backups in ZIP format
* Uploading previously created backups
* Restoring backups to site/assets/files
* Providing info on existing backups
* Managing existing backups (downloading, deleting, etc.)

Requires ProcessWire 3.0.62 or newer.

## Known Issues:

* Created ZIP-files cannot be opened with some tools (like Windows explorer) due to `./` path prefix
* PHP and web server must be configured to allow large file uploads for 'restore' functionality
* Backup descriptions not implemented yet

## License and Copyright

MPL 2.0, see `LICENSE`

Copyright 2019 by Michael Jaros

UI parts of the code have been reused with only small adaptations from Ryan Cramer's `ProcessDatabaseBackups` module.

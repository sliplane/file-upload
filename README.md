# file-upload

Utility to upload files to your server.

## How to use this

### With Github

1. Fork the repo
2. Login to sliplane
3. Go to your project and click "Deploy Service"
4. Select "GitHub" as the deploy source
5. Select the "file-upload" repository. Note: if the repository does not show up, you might need to configure repository access first
6. Leave the defaults (public, http)
7. Select the server, where you want to upload your files
9. Add a new volume or an existing one. the container mount path should be "/var/www/html/uploads"
10. Deploy

You can now go to your services ...sliplane.app domain to upload files to your server. Keep the domain secret, as anyone who knows the link can upload files there!

### With Docker Hub

1. Login to sliplane
2. Go to your project and click "Deploy Service"
3. Select "Docker Hub" as the deploy source
4. Search for "sliplane/file-upload". Note: if the image does not show up, click on the "Use as typed" button
5. Leave the defaults (public, http)
6. Select the server, where you want to upload your files
7. Add a new volume or an existing one. the container mount path should be "/var/www/html/uploads"
8. Deploy

You can now go to your services ...sliplane.app domain to upload files to your server. Keep the domain secret, as anyone who knows the link can upload files there!

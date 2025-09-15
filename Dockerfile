# Stage 1: Base Nginx to serve HTML
FROM nginx:1.25.3-alpine-slim

# Set the working directory for Nginx
WORKDIR /usr/share/nginx/html

# Remove default Nginx static assets
RUN rm -rf /usr/share/nginx/html/*

# Remove the default Nginx configuration file
RUN rm /etc/nginx/conf.d/default.conf

# Copy your custom Nginx configuration (e.g., to handle routing for SPA)
COPY ./nginx.conf /etc/nginx/nginx.conf

# Copy your HTML, CSS, and JS files to the Nginx directory
COPY . /usr/share/nginx/html

# Set the correct ownership of files
RUN chown -R nginx:nginx /usr/share/nginx/html

# Expose port 80 to be accessible externally
EXPOSE 80

# Start Nginx in the foreground
ENTRYPOINT ["nginx", "-g", "daemon off;"]

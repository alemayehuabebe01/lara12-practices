<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 Contact Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --accent-color: #2e59d9;
            --text-color: #5a5c69;
        }

        body {
            background-color: var(--secondary-color);
            color: var(--text-color);
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        .contact-container {
            max-width: 800px;
            margin: 5rem auto;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border-radius: 0.35rem;
            overflow: hidden;
        }

        .contact-header {
            background: var(--primary-color);
            color: white;
            padding: 1.5rem;
            text-align: center;
        }

        .contact-body {
            background: white;
            padding: 2.5rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 1.75rem;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .contact-icon {
            font-size: 1.5rem;
            margin-right: 0.75rem;
            color: var(--primary-color);
        }

        .form-floating label {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="contact-container">
        <div class="contact-header">
            <h2><i class="fas fa-paper-plane me-2"></i>Contact Us</h2>
            <p class="mb-0">We'd love to hear from you</p>
        </div>

        <div class="contact-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <span class="alert alert-danger">{{ $error }}</span>
                @endforeach
            @endif
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="row g-3 mb-4">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="firstName" placeholder="First Name"
                                name="name" value="{{ old('name') }}" required>
                            <label for="firstName"><i class="fas fa-user contact-icon"></i>Name</label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email Address" value="{{ old('email') }}" required>
                        <label for="email"><i class="fas fa-envelope contact-icon"></i>Email Address</label>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="form-floating">
                        <input type="tel" class="form-control" name="subject" id="phone"
                            placeholder="Phone Number" value="{{ old('subject') }}">
                        <label for="phone"><i class="fas fa-phone contact-icon"></i>Subject</label>
                    </div>
                </div>



                <div class="mb-4">
                    <div class="form-floating">
                        <textarea class="form-control" name="message" placeholder="Your message" id="message" style="height: 150px" value="" required>{{ old('message') }}</textarea>
                        <label for="message"><i class="fas fa-comment contact-icon"></i>Your Message</label>
                    </div>
                </div>


                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

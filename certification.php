<?php
$pageTitle = "Certifications & Approvals | Prag Electricals Pvt. Ltd.";
$pageDescription = "Explore Prag Electricals Pvt. Ltd.'s ISO 9001:2015 quality management certification, BIS approval and vendor approvals with State Utilities, PSUs and private organizations.";
$pageKeywords = "Prag Electricals certifications, ISO 9001:2015 certified company, BVQI certification, BIS approved manufacturer, electrical manufacturer certification, approved electrical vendor Assam";
include 'include/header.php';
?>

<section class="inner-page-breadcrumb">
    <div class="container">
        <div class="breadcrumb-content">
            <span>Certification</span>
            <h1>Our Certifications & Approvals</h1>

            <div class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <i class="bi bi-chevron-right"></i>
                <span>Certification</span>
            </div>
        </div>
    </div>
</section>

<section class="prag-cert-section">
    <div class="container">
        <div class="prag-cert-intro">
            <span class="prag-cert-eyebrow">Quality & Compliance</span>
            <h2>Our Certifications & Approvals</h2>
            <p>
                We are committed to maintaining quality standards and meeting
                applicable requirements in our manufacturing and electrical
                engineering operations.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-lg-6 col-md-6">
                <div class="prag-cert-card">
                    <div class="prag-cert-image">
                        <img
                            src="https://thumb.wikimedia.org/wikipedia/commons/thumb/0/0f/ISO_9001-2015.svg/3840px-ISO_9001-2015.svg.png?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=thumbnail"
                            alt="ISO 9001:2015 quality management standard"
                            loading="lazy"
                        >
                    </div>

                    <div class="prag-cert-card-content">
                        <span class="prag-cert-number">01</span>
                        <h3>ISO 9001:2015 (QMS)</h3>
                        <p>
                            We are an ISO 9001:2015 (QMS) certified organization
                            certified by BVQI, demonstrating our commitment to
                            quality management and consistent operational practices.
                        </p>
                        <span class="prag-cert-status">
                            <i class="bi bi-patch-check-fill"></i>
                            Quality Management System
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="prag-cert-card">
                    <div class="prag-cert-image">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ2CGfV-11-2R0OWqJhmv0FxF6VjMJsCHNCc1-gHvUhQ&s=10"
                            alt="BIS certification and approval"
                            loading="lazy"
                        >
                    </div>

                    <div class="prag-cert-card-content">
                        <span class="prag-cert-number">02</span>
                        <h3>BIS-Approved Manufacturer</h3>
                        <p>
                            We are a BIS-approved manufacturer committed to
                            meeting applicable standards and requirements for
                            our electrical manufacturing operations.
                        </p>
                        <span class="prag-cert-status">
                            <i class="bi bi-patch-check-fill"></i>
                            BIS Approval
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="prag-cert-vendors">
            <div class="prag-cert-vendors-icon">
                <i class="bi bi-building-check"></i>
            </div>
            <div>
                <h3>Approved Vendor Network</h3>
                <p>
                    We are also approved vendors of various State Utilities,
                    Public Sector Undertakings (PSUs), and private organizations.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="prag-cert-approval-section">
    <div class="container">
        <div class="prag-cert-approval">
            <div class="prag-cert-approval-content">
                <span class="prag-cert-eyebrow">Vendor Approvals</span>
                <h2>Trusted by Utilities & Organisations</h2>
                <p>
                    We are also approved vendors of various State Utilities,
                    Public Sector Undertakings (PSUs), and private organizations.
                    These vendor approvals support our work across diverse
                    electrical infrastructure and industrial requirements.
                </p>
            </div>

            <div class="prag-cert-approval-list">
                <div class="prag-cert-approval-item">
                    <i class="bi bi-lightning-charge"></i>
                    <span>State Utilities</span>
                </div>

                <div class="prag-cert-approval-item">
                    <i class="bi bi-buildings"></i>
                    <span>Public Sector Undertakings (PSUs)</span>
                </div>

                <div class="prag-cert-approval-item">
                    <i class="bi bi-briefcase"></i>
                    <span>Private Organisations</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.prag-cert-section {
    padding: 90px 0;
    background: #fff;
}





.prag-cert-section {
    padding: 80px 0;
    background: #f8f8f8;
}

.prag-cert-intro {
    max-width: 760px;
    margin: 0 auto 45px;
    text-align: center;
}

.prag-cert-eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    color: #d71920;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.prag-cert-intro h2 {
    margin-bottom: 15px;
    color: #171717;
    font-size: clamp(28px, 3vw, 40px);
    font-weight: 700;
}

.prag-cert-intro p {
    margin-bottom: 0;
    color: #666;
    line-height: 1.8;
}

.prag-cert-card {
    height: 100%;
    overflow: hidden;
    background: #fff;
    border: 1px solid #e8e8e8;
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.prag-cert-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 35px rgba(0, 0, 0, 0.09);
}

.prag-cert-image {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 150px;
    padding: 25px;
    background: #fff;
    border-bottom: 1px solid #eee;
}

.prag-cert-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.prag-cert-card-content {
    position: relative;
    padding: 28px;
}

.prag-cert-number {
    display: inline-block;
    margin-bottom: 12px;
    color: #d71920;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
}

.prag-cert-card-content h3 {
    margin-bottom: 14px;
    color: #171717;
    font-size: 22px;
    font-weight: 700;
}

.prag-cert-card-content p {
    margin-bottom: 20px;
    color: #666;
    font-size: 15px;
    line-height: 1.8;
}

.prag-cert-status {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #d71920;
    font-size: 13px;
    font-weight: 600;
}

.prag-cert-status i {
    font-size: 17px;
}

.prag-cert-vendors {
    display: flex;
    align-items: center;
    gap: 22px;
    margin-top: 35px;
    padding: 28px;
    background: #fff;
    border-left: 4px solid #d71920;
    border-radius: 5px;
}

.prag-cert-vendors-icon {
    display: flex;
    flex: 0 0 55px;
    align-items: center;
    justify-content: center;
    width: 55px;
    height: 55px;
    color: #fff;
    background: #d71920;
    border-radius: 50%;
    font-size: 24px;
}

.prag-cert-vendors h3 {
    margin-bottom: 8px;
    color: #171717;
    font-size: 20px;
    font-weight: 700;
}

.prag-cert-vendors p {
    margin-bottom: 0;
    color: #666;
    line-height: 1.7;
}

@media (max-width: 767px) {
    .prag-cert-section {
        padding: 55px 0;
    }

    .prag-cert-intro {
        margin-bottom: 30px;
    }

    .prag-cert-image {
        height: 140px;
        padding: 20px;
    }

    .prag-cert-card-content {
        padding: 22px;
    }

    .prag-cert-vendors {
        align-items: flex-start;
        gap: 15px;
        padding: 20px;
    }

    .prag-cert-vendors-icon {
        flex-basis: 45px;
        width: 45px;
        height: 45px;
        font-size: 20px;
    }

    .prag-cert-vendors h3 {
        font-size: 18px;
    }
}

.prag-cert-heading {
    max-width: 800px;
    margin: 0 auto 50px;
    text-align: center;
}

.prag-cert-eyebrow {
    display: inline-block;
    margin-bottom: 14px;
    color: #d71920;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.prag-cert-heading h2,
.prag-cert-approval-content h2 {
    margin: 0 0 20px;
    color: #151515;
    font-size: 40px;
    font-weight: 700;
    line-height: 1.25;
}

.prag-cert-heading p,
.prag-cert-approval-content p {
    margin: 0;
    color: #666;
    font-size: 16px;
    line-height: 1.85;
}

.prag-cert-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 28px;
    max-width: 1000px;
    margin: 0 auto;
}

.prag-cert-card {
    position: relative;
    padding: 35px;
    border: 1px solid #e7e7e7;
    border-top: 4px solid #d71920;
    background: #fff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.prag-cert-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.07);
}

.prag-cert-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
}

.prag-cert-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 62px;
    height: 62px;
    background: #fff0f0;
    color: #d71920;
    font-size: 29px;
}

.prag-cert-number {
    color: #ededed;
    font-size: 38px;
    font-weight: 800;
}

.prag-cert-category {
    display: block;
    margin-bottom: 9px;
    color: #777;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}

.prag-cert-card h3 {
    margin: 0;
    color: #151515;
    font-size: 28px;
    font-weight: 700;
}

.prag-cert-line {
    width: 48px;
    height: 3px;
    margin: 20px 0;
    background: #d71920;
}

.prag-cert-card > p {
    min-height: 112px;
    margin: 0 0 25px;
    color: #666;
    font-size: 15px;
    line-height: 1.85;
}

.prag-cert-footer {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-top: 18px;
    border-top: 1px solid #ededed;
    color: #292929;
    font-size: 14px;
    font-weight: 600;
}

.prag-cert-footer i {
    color: #d71920;
    font-size: 17px;
}

.prag-cert-approval-section {
    padding: 0 0 90px;
    background: #fff;
}

.prag-cert-approval {
    padding: 45px;
    border-left: 5px solid #d71920;
    background: #f7f7f7;
}

.prag-cert-approval-content {
    max-width: 850px;
}

.prag-cert-approval-content h2 {
    margin-bottom: 15px;
}

.prag-cert-approval-list {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
    margin-top: 30px;
}

.prag-cert-approval-item {
    display: flex;
    align-items: center;
    gap: 13px;
    min-height: 75px;
    padding: 18px;
    border: 1px solid #e8e8e8;
    background: #fff;
    color: #252525;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.5;
}

.prag-cert-approval-item i {
    flex-shrink: 0;
    color: #d71920;
    font-size: 23px;
}

@media (max-width: 991px) {
    .prag-cert-section {
        padding: 70px 0;
    }

    .prag-cert-heading h2,
    .prag-cert-approval-content h2 {
        font-size: 34px;
    }

    .prag-cert-card {
        padding: 28px;
    }

    .prag-cert-card > p {
        min-height: 0;
    }

    .prag-cert-approval {
        padding: 35px;
    }

    .prag-cert-approval-list {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .prag-cert-approval-section {
        padding-bottom: 70px;
    }
}

@media (max-width: 767px) {
    .prag-cert-section {
        padding: 55px 0;
    }

    .prag-cert-heading {
        margin-bottom: 35px;
    }

    .prag-cert-heading h2,
    .prag-cert-approval-content h2 {
        font-size: 29px;
    }

    .prag-cert-heading p,
    .prag-cert-approval-content p {
        font-size: 15px;
    }

    .prag-cert-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .prag-cert-card {
        padding: 27px 24px;
    }

    .prag-cert-approval-section {
        padding-bottom: 55px;
    }

    .prag-cert-approval {
        padding: 28px 22px;
    }
}

@media (max-width: 400px) {
    .prag-cert-heading h2,
    .prag-cert-approval-content h2 {
        font-size: 26px;
    }

    .prag-cert-card h3 {
        font-size: 25px;
    }

    .prag-cert-card {
        padding: 24px 20px;
    }

    .prag-cert-approval {
        padding: 25px 18px;
    }
}
</style>

<?php include 'include/footer.php' ?>

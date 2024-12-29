resource "aws_cognito_user_pool" "pool" {
  name = "Lab user pool"

  account_recovery_setting {
    recovery_mechanism {
      name = "verified_email"
      priority = 1
    }
  }
}

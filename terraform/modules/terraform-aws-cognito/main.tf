resource "aws_cognito_user_pool" "pool" {
  name                     = "Lab user pool"
  auto_verified_attributes = ["email"]
  deletion_protection      = "ACTIVE"
  username_attributes      = ["email"]

  username_configuration {
    case_sensitive = false
  }
}

resource "aws_cognito_user_pool_client" "client" {
  name                          = "Lab web app"
  user_pool_id                  = aws_cognito_user_pool.pool.id
  enable_token_revocation       = true
  explicit_auth_flows           = ["ALLOW_USER_PASSWORD_AUTH", "ALLOW_USER_SRP_AUTH", "ALLOW_REFRESH_TOKEN_AUTH"]
  prevent_user_existence_errors = true
}

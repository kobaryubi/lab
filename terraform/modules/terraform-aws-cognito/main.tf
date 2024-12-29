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
  access_token_validity         = 60
  enable_token_revocation       = true
  explicit_auth_flows           = ["ALLOW_USER_SRP_AUTH", "ALLOW_REFRESH_TOKEN_AUTH"]
  generate_secret               = true
  id_token_validity             = 60
  prevent_user_existence_errors = "ENABLED"
  refresh_token_validity        = 5

  token_validity_units {
    access_token  = "minutes"
    id_token      = "minutes"
    refresh_token = "days"
  }
}

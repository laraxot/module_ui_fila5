# MCP Server Configuration - UI Module

<<<<<<< HEAD
<<<<<<< HEAD
**Last Updated**: 31 Gennaio 2026
=======

>>>>>>> dfac49d (.)
=======
**Last Updated**: 31 Gennaio 2026
>>>>>>> dfbb8305 (.)
**Status**: ✅ Configured
**MCP Servers**: Asana, ClickUp, Filesystem, Database, Redmine (Planned)

---

## 📋 Overview

The UI module's MCP configuration enables AI assistants to interact with:
- **Asana Work Graph** - Task and project management
- **ClickUp Workspace** - Advanced task workflows and time tracking
- **Redmine** - Project management (planned, requires self-hosted instance)
- **Filesystem** - Direct file access
- **Database** - SQLite queries for data inspection

---

## 🔧 Configuration

### Active MCP Servers

```json
{
  "mcpServers": {
    "asana": {
      "command": "npx",
      "args": ["mcp-remote", "https://mcp.asana.com/sse"],
      "description": "Asana Work Graph integration"
    },
    "clickup": {
      "command": "npx",
      "args": ["-y", "mcp-remote", "https://mcp.clickup.com/mcp"],
      "description": "ClickUp workspace integration"
    },
    "filesystem": {
      "command": "npx",
<<<<<<< HEAD
<<<<<<< HEAD
=======
      "args": ["-y", "@modelcontextprotocol/server-filesystem", ". progetto>/laravel"],
||||||| parent of 9a84589 (.)
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
      "args": ["-y", "@modelcontextprotocol/server-filesystem", "/var/www/_bases/base_laravelpizza/laravel"],
      "description": "Access to UI module files"
    },
    "database": {
      "command": "npx",
      "args": ["-y", "@bytebase/dbhub"],
      "env": {
<<<<<<< HEAD
<<<<<<< HEAD
=======
        "DATABASE_URL": "sqlite://. progetto>/laravel/database/database.sqlite"
||||||| parent of 9a84589 (.)
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        "DATABASE_URL": "sqlite:///var/www/_bases/base_laravelpizza/laravel/database/database.sqlite"
      },
      "description": "SQLite database queries"
    }
  }
}
```

---

## 🚀 Usage Examples

### Asana Integration
```bash
# Create task
<<<<<<< HEAD
<<<<<<< HEAD
"Create task in 'LaravelPizza - UI Module' project: 'Implement location selector component'"
=======
"Create task in '<nome progetto> - UI Module' project: 'Implement location selector component'"
>>>>>>> dfac49d (.)
=======
"Create task in 'LaravelPizza - UI Module' project: 'Implement location selector component'"
>>>>>>> dfbb8305 (.)

# Update status
"Update task 'Create reusable card component' status to 'In Progress'"

# Log time
"Log 3 hours on task 'Implement interactive form components'"
```

### ClickUp Integration
```bash
# Create task
"Create task in 'UI Development' space: 'Implement location selector component'"

# Update status
"Update task 'Create reusable card component' status to 'In Progress'"

# Log time
"Log 3 hours on task 'Implement interactive form components'"
```

### Redmine Integration (Planned)
```bash
# Create issue
"Create issue in project 'UI Module': task 'Implement location selector component' (Priority: High)"
```

---

## 📊 MCP Servers Comparison

| Server | Status | Auth | Best For |
|--------|--------|------|----------|
| **Asana** | ✅ Active | OAuth | Established workflows |
| **ClickUp** | ✅ Active | OAuth | Time tracking, reports |
| **Redmine** | 🔄 Planned | API Key | Self-hosted, custom workflows |
| **Filesystem** | ✅ Active | N/A | Direct file access |
| **Database** | ✅ Active | N/A | Schema inspection |

---

## 📝 Best Practices

1. **Task Naming Convention**: Include module prefix `[UI]`
2. **Tagging**: Use consistent tags across platforms
3. **Use Asana for**: Established workflows, team collaboration
4. **Use ClickUp for**: Time tracking, executive reports
5. **Use Redmine for**: Self-hosted requirements (when implemented)

---

## 📚 Related Documentation

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
- [Asana MCP Configuration](../../../docs/mcp-asana-configuration.md)
- [ClickUp MCP Configuration](../../../docs/mcp-clickup-configuration.md)
- [Redmine MCP Configuration](../../../docs/mcp-redmine-configuration.md)
- [UI Module Roadmap](./roadmap-2026-01-31.md)
<<<<<<< HEAD
=======
- [Asana MCP Configuration](../../../../docs/mcp-asana-configuration.md)
- [ClickUp MCP Configuration](../../../../docs/mcp-clickup-configuration.md)
- [Redmine MCP Configuration](../../../../docs/mcp-redmine-configuration.md)
- [UI Module Roadmap](./roadmap-[date].md)
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)

---

## 🔄 Updates

<<<<<<< HEAD
<<<<<<< HEAD
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
=======
- **[DATE]**: Added ClickUp support
- **[DATE]**: Planned Redmine integration
>>>>>>> dfac49d (.)
=======
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
>>>>>>> dfbb8305 (.)
- **Servers Active**: 4 (Asana, ClickUp, Filesystem, Database)

---

**Module**: UI (User Interface Components)
**MCP Version**: 2.0.0
<<<<<<< HEAD
**Last Review**: 31 Gennaio 2026
=======
**Last Review**: 31 Gennaio 2026
>>>>>>> dfbb8305 (.)
